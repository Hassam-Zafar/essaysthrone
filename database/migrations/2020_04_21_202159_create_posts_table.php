<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('pseudonym_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('media')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('is_published')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_trending')->default(0);
            $table->boolean('is_popular')->default(0);
            $table->integer('approved_by')->nullable();
            $table->enum('type',['image','news'])->default('image');
            $table->string('future_day_time')->nullable();
            $table->string('created_date_time')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('tags')->nullable();
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->integer('view_count')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
