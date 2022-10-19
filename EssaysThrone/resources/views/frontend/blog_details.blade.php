@extends('frontend.layouts.app')

@section('title')
{{ $post->meta_title ?? "" }}
@endsection

@section('description')
{{ $post->meta_description ?? "" }}
@endsection

@section('tags')
{{ $post->tags ?? "" }}
@endsection

@section('page_main_heading')
{{ $post->title ?? "" }}
@endsection

@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/blog.css') }}">
@endpush

@section('content')

<div class="mainblogDiv">
    <div class="container row innerMainblogDiv">
      <div class="col-lg-8 col-md-12 blogDetail">
        {{-- <div class="post-heading">
            <p class="mb-2">POST</p>
        </div> --}}
        {{-- @if(isset($posts) && count($posts)) --}}
        {{-- @foreach($posts as $post) --}}
        <div class="innerBlogDetail">
            <div class="text-right">
                <p class="date">{{ $post->formatted_date ?? "" }}</p>
            </div>
            <div class="blogImage">
                <div class="imageDiv" @if(isset($post)) style="background-image: url({{ asset('uploads/mediagallery/'.$post->media)  }})" @endif>
                </div>
            </div>
            <div class="blogText">
                <div class="innerBlogText">
                    <h4>{{ $post->title ?? "" }}</h4>
                    <p>{!! $post->content ?? "" !!}</p>
                    {{-- <a href="{{ route('frontend.blog_detail',['id'=>$post->id]) }}" class="btn btn-primary">View More</a> --}}
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
        {{-- @endif --}}
    </div>

    <div class="col-lg-4 col-md-12 recentBar">
        <div class="innerRecentBar">
            {{-- <div class="searchRecent">
                <input placeholder="Search">
                <button><i class="fas fa-search"></i></button>
            </div> --}}
            <div class="recentList">
         
                 @if(isset($related_posts) && count($related_posts)) 
                
                <h4>RECENT POSTS</h4>
                @foreach($related_posts as $r_post)
               
                <div class="listItem">
                    <span class="bullet">
                        <i class="fas fa-circle"></i>
                    </span>

                    <a href="{{ route('frontend.blog_detail',['slug'=>$r_post->slug]) }}" class="blog-links">{{ $r_post->title }}</a>
                   
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
</div>

<div class="row pilt">
    <div class="col-md-12 bottom">
        <div class="trusted">
            <div class="card">
                <div class="card-body">
                    <div class="trust_customers">
                        <div class="__head">
                            <h3 class="_gbl___head">Trusted by <span class="___ghead">14,000+</span> happy <br> customers and experts
                            </h3>
                        </div>
                        <div class="trust_poilot"> 
                            <img src="{{ asset('frontend/assets/images/reviews.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection