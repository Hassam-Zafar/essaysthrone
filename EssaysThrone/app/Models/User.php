<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    
    // role_id 1 = admin
    // role_id 2 = company
    // role_id 3 = job user

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id','first_name', 'last_name', 'slug', 'email', 'phone', 'image', 'resume', 'status', 'is_verified', 'type', 'about', 'twitter', 'facebook', 'linkedin', 'reddit', 'last_login','password'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The full name attribute of specified user.
     *
     * @var array
     */
    function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasMany
    **/
    public function modules(){
        return $this->hasMany('App\Models\ModuleUser');
    }

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasMany
    **/
    public function modulesUser(){
        return $this->belongsToMany('App\Models\Module','module_users');
    }

    /**
     * @return Illuminate/Http/Response
     */
    public function deletePermissions(){
        if(count($this->modules)>0){
            foreach ($this->modules as $key => $module) {
                $module->delete();
            }
        }
    }

    /**
    * @param array modules
    * @return Illuminate/Http/Response
    */
    public function savePermissions($modules){
        foreach ($modules as $key => $module){
            $module_permission = new ModuleUser;
            $module_permission->module_id = $module;
            $module_permission->user_id = $this->id;
            $module_permission->save();
        }
    }

    /**
    * @param array $data
    * @return boolean true or false
    */
    public static function createCompanyUser($data){
        $data['first_name'] = $data['name'];
        unset($data['name']);
        $data['password'] = \Hash::make($data['password']);
        if(isset($data['image'])){
            $data['image'] = uploadFile($data['image'],'company');
        }
        $data['role_id'] = 2;
        $data['type'] = 'company';
        $data['is_verified'] = 1;
        $user = User::create($data);
        return ['user_id'=>$user->id,'image'=>$user->image ?? ""];
    }

    /**
    * @param array $data
    * @return boolean true or false
    */
    public static function updateCompanyUser($data){
        $data['first_name'] = $data['name'];
        $data['password'] = isset($data['password']) ? \Hash::make($data['password']) : $data['user_pwd'];
        if(isset($data['image'])){
            $data['image'] = uploadFile($data['image'],'company');
        }
        $data['role_id'] = 2;
        $data['type'] = 'company';
        $data['is_verified'] = 1;
        User::find($data['user_id'])->update($data);
        return $data;
    }
}
