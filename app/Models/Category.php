<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "categories";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "title", "slug", "description", "parent_id", "is_active",
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
    * @return \Illiminate\Databse\Eloquent\Relations\HasMany 
    */
    public function category(){
        return $this->belongsTo('App\Models\Category','parent_id');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function subCategory(){
        return $this->hasMany('App\Models\Category','parent_id','id');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function activeSubCategory(){
        return $this->hasMany('App\Models\Category','parent_id','id')->where('is_active',1);
    }

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasMay
    */
    public function posts(){
        return $this->belongsToMany('App\Models\Post','post_categories');
    }
}
