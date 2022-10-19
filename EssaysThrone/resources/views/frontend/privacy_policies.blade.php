@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "Privacy & Policy" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Privacy & Policy" }}
@endsection

@section('tags')
{{ isset($pages->tags) ? json_decode($pages->tags) :  "Privacy & Policy" }}
@endsection

@section('page_main_heading')
PRIVACY POLICY
@endsection

@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/static.css') }}">
<style type="text/css">
    p {
        font-size: 14px; 
    }
</style>
@endpush

@section('content')

<div class="acd_section static-pages">
    <div class="container">
        <h2>Effective as of Jan 25, 2022</h2>
        <p>we respect your privacy and we are committed to processing personal data of our users/customers in a secure and manner in line with our legal obligations.</p>
        <p>This Policy explains how we will use any personal data that we may collect about you when you use our website.</p>
        
        <h3>What data we collect</h3>
        <p>Our Privacy Policy governs the use and storage of your personal data. You can see our Privacy Policy on the website which detail our processing.</p>
        <p>This website is a Controller of the personal data you (data subject) provide us. We may collect the following types of personal data from you within the following website:</p>
        <p>Three factors influence our pricing on your project:</p>
        <ul>
            <li>
                contact details such as your email address and phone number;
            </li>   
            <li>
             data that identifies you such as your IP address, login information, browser type and version, time zone setting, browser plug-in types, geolocation information about where you might be, operating system and version;
         </li>   
         <li>
            your birthday details in order to send you special discount offers;
        </li>   
        <li>
            data on how you use the website such as your URL clickstreams (the path you take through the website), goods/services viewed, page response times, download errors, how long you stay on webpages, what you do on those pages, how often, and other actions.
        </li>
    </ul>
    <h3>Why we need it</h3>
    <p>This website collects your personal data in order:</p>
    <ul>
        <li>
            Provide services;
        </li>   
        <li>
         Keep the website running;
     </li>   
     <li>
        Improve the website;
    </li>   
    <li>
        for customer support;
    </li>
    <li>
        for marketing purposes (with your consent)
    </li>
</ul>
<p>
    This website will not sell or provide your data to any third party where you have not provided your consent to do so. All other data is processed in accordance with the General Data Protection Regulation (GDPR) 2018 and other applicable laws.
</p>
</div>
</div>




@endsection