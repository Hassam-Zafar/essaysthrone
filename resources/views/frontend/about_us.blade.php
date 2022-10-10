@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "About Us" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "About Us" }}
@endsection

@section('tags')
{{ isset($pages->tags) ? json_decode($pages->tags) :  "About Us" }}
@endsection

@section('page_main_heading')
ABOUT US
@endsection

@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/static.css') }}">
@endpush

@section('content')

<div class="acd_section static-pages">
    <div class="container">
        <h2 class="black">Who are we</h2>
        <p class="paras">t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

        <p class="paras">
            This website will not sell or provide your data to any third party where you have not provided your consent to do so. All other data is processed in accordance with the General Data Protection Regulation (GDPR) 2018 and other applicable laws.
        </p>
    </div>
</div>

<div class="row pilt">
    <div class="col-md-12 bottom">
      <div class="trusted">
        <div class="card p-0">
          <div class="card-body">
            <div class="trust_customers">
              <div class="__head">
                <h3 class="_gbl___head">
                  Trusted by <span class="___ghead">14,000+</span> happy <br>
                  customers and experts
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