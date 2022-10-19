<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostShare extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "post_shares";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','post_id', 'shareable_link', 'count'
    ];

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasOne
    **/
    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
