<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostMediaThumbnail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "post_media_thumbnails";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "post_id",
        "media_gallery_id",
        "type",
        "file_name",
    ];
}
