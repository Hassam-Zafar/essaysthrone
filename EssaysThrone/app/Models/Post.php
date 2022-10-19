<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\PostCategory;

class Post extends Model
{
    use SoftDeletes;

    const str_limit = 100;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "posts";


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_id", "pseudonym_id", "title", "slug", "sub_title", "media", "content", "is_published", "is_trending", "is_popular", "is_approved", "approved_by", "type", "future_day_time", "created_date_time", "meta_title", "meta_description", "tags", "view_count","og_title", "og_description",
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasOne
    **/
    public function pseudonym(){
        return $this->hasOne('App\Models\Pseudonym','id','pseudonym_id');
    }

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasMay
    */
    public function categories(){
        return $this->belongsToMany('App\Models\Category','post_categories', 'post_id', 'category_id');
    }

    /**
    * @return /Illuminate/Database/Eloquent/Relations/HasMay
    */
    public function post_media_thumbnails(){
        return $this->belongsTo('App\Models\PostMediaThumbnail');
    }

    /**
     * Get the limited post content.
     *
     * @param  string  $value
     * @return string
     */
    public function getDescriptionAttribute($value){
        return \Illuminate\Support\Str::limit(strip_tags($this->content),200);
    }

    /**
     * Get the formatted post created date.
     *
     * @param  string  $value
     * @return string
     */
    public function getFormattedDateAttribute($value){
        return date('M d, Y',strtotime(str_replace('/', '-', $this->created_at)));
    }


    /**
    * @param \App\Models\Post
    * @return Illuminate/Http/Response
    **/
    public function saveCategories($post_id, $data)
    {
        foreach ($data as $key => $category_id) {
            $post_category = new PostCategory;
            $post_category->post_id = $post_id;
            $post_category->category_id = $category_id;
            $post_category->save();
        }
        return true;
    }


    /**
    * @param int post id
    * @return Illuminate/Http/Response
    **/
    public function deleteCategories($post_id)
    {
        $post_categories = PostCategory::where('post_id',$post_id)->get();
        if(isset($post_categories) && count($post_categories)){
            foreach ($post_categories as $key => $category) {
                $category->forceDelete();
            }
        }
        return true;
    }

}
