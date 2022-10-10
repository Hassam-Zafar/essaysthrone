<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pseudonym extends Model
{
    use SoftDeletes;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "pseudonyms";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "title", "slug", "media", "facebook", "twitter", "linkedin", "reddit", "notes",
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
    * @return Illimunate/Database/Eloquent/Relations/HasOne
    *
    **/
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
