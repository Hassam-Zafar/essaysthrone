@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "Services" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Services" }}
@endsection

@section('tags')
{{ $pages->tags ?? "Services" }}
@endsection

@section('content')


<div>

</div>


<div class="acd_section assits pt-5 pb-5 pt-md-0 pb-md-0">
    <div class="container mt-5">
        <div class="__head">
            <h3 class="_gbl___head">Services You Can <span class="___ghead">Enjoy </span>With Us</h3>
        </div>
        <p class="paras">We have numerous writers that will complete your projects in short order at reasonable rates.
            WritersGeek is here to assist you with numerous services. Some of them are described below:</p>
        <div class="row details">
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Essay (of any type)</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Assignment</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Case Study
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Research Paper
                            </span>
                        </div>
                    </div>
                    {{ -- --}}
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Thesis</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Research Proposal
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Business Plan</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Annotated Graphy
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Term Paper
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Article Review
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 items">
                        <div class="box">
                            <span>Critical Thinking</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="writers">
                    <img src="{{ asset('frontend/assets/images/assis.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
<div class="acd_section order_paper">
    <div class="container">
        <div class="__head">
            <h3 class="_gbl___head mb-4 mb-md-0">Order<span class="___ghead"> Your Essay</span> In <span
                    class="___ghead"> 4 <br>
                    Typical Steps</span>
            </h3>
        </div>
        <div class="row crs">
            <div class="col-lg-6 col-md-6">
                <div class="carings">
                    <div class="circle">
                        <img src="{{ asset('frontend/assets/images/like.png') }}" alt="">
                    </div>
                    <div class="care_support">
                        <div class="head">
                            <span>Caring support 24/7
                            </span>
                        </div>
                        <p>It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="carings">
                    <div class="circle">
                        <img src="{{ asset('frontend/assets/images/like.png') }}" alt="">
                    </div>
                    <div class="care_support">
                        <div class="head">
                            <span>Caring support 24/7
                            </span>
                        </div>
                        <p>It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
                <div class="carings pb-0">
                    <div class="circle">
                        <img src="{{ asset('frontend/assets/images/like.png') }}" alt="">
                    </div>
                    <div class="care_support">
                        <div class="head">
                            <span>Caring support 24/7
                            </span>
                        </div>
                        <p>It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="paprs">
                    <img src="{{ asset('frontend/assets/images/orders.png') }}" alt="">
                </div>
            </div>
            <div class="orders_chats">
                <a href="{{ route('frontend.order') }}" class="btn _gbl_btn">Order Now</a>
                <button class="btn _gbl_btn live">Live Chat</button>
            </div>
        </div>
    </div>
</div>


</div>
<div class="acd_section benefits">
    <div class="container">
        <div class="row benefits_dtl">
            <div class="col-lg-6 cus_lft">
                <div class="__head">
                    <h3 class="_gbl___head">Benefits<span class="___ghead"> You</span>
                        Get
                    </h3>

                </div>
                <p>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum.It is a long established fact
                    that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem
                    Ipsum.It is a long established be distracted by the readable
                    content of a page when looking at its layout. The point of
                    using Lorem Ipsum.It is a long established.
                    <br><br>
                    It is a long established fact that a reader will be distracted by
                    the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum.It is a long established fact
                    that a reader will be distracted by the readable content of a
                    page when looking at its layout. The point of using Lorem
                    Ipsum.It is a long established.
                </p>
                <div class="orders_chats">
                    <a href="{{ route('frontend.order') }}" class="btn _gbl_btn">Order Now</a>
                    <button class="btn _gbl_btn live">Live Chat</button>
                </div>
            </div>
            <div class="col-lg-6">

                <div class="row benefits_rht">
                    <div class="col-lg-6 col-md-6 col-sm-6 ps-lg-0 cus_rht">
                        <div class="_bx bx_01">
                            <div class="_care_dtl">
                                <i class="far fa-quote-right"></i>
                                <span>Caring support 24/7</span>
                                <p>It is a long established fact that
                                    a reader will be distracted by
                                    the readable content of a page
                                    when looking at its layout</p>
                            </div>
                        </div>
                        <div class="_bx bx_02 my-4">
                            <div class="_care_dtl">
                                <i class="far fa-quote-right"></i>
                                <span>Caring support 24/7</span>
                                <p>It is a long established fact that
                                    a reader will be distracted by
                                    the readable content of a page
                                    when looking at its layout</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 pe-lg-0 cus_rht">
                        <div class="all_boxes">
                            <div class="_bx bx_03">
                                <div class="_care_dtl">
                                    <i class="far fa-quote-right"></i>
                                    <span>Caring support 24/7</span>
                                    <p>It is a long established fact that
                                        a reader will be distracted by
                                        the readable content of a page
                                        when looking at its layout</p>
                                </div>

                            </div>
                            <div class="_bx bx_04 my-4">
                                <div class="_care_dtl">
                                    <i class="far fa-quote-right"></i>
                                    <span>Caring support 24/7</span>
                                    <p>It is a long established fact that
                                        a reader will be distracted by
                                        the readable content of a page
                                        when looking at its layout</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="acd_section features">
    <div class="container">
        <div class="row fea_main">
            <div class="col-lg-3 col-md-4 pe-lg-0 pe-md-0 feature_area">
                <div class="features_head">
                    <span>Some Extra Features WritersGeek Provide
                    </span>
                </div>
                <img class="box" src="{{ asset('frontend/assets/images/boxes.png') }}" alt="">
            </div>
            <div class="col-lg-9 col-md-8 p-lg-0 p-md-0">
                <div class="all_features">
                    <ul class="fea_list">
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>Plagiarism report</span>
                        </li>
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>Plagiarism report</span>
                        </li>
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>Plagiarism report</span>
                        </li>
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>Plagiarism report</span>
                        </li>
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>Plagiarism report</span>
                        </li>
                        <li>
                            <i class="fad fa-check-circle"></i>
                            <span><s>£11</s>s Unlimited revisions</span>
                        </li>
                    </ul>
                    <div class="free_features">
                        <div class="_price">
                            <span>If your order is above <b>$62,</b> <small>you’ll get some free features like unlimited
                                    revisions and plagiarism report as a gift from our site</small></span>
                        </div>
                        <div class="orders_chats">
                            <a href="{{ route('frontend.order') }}" class="btn _gbl_btn">Order Now</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

</div>
<div class="acd_section questions">
    <div class="container">
        <div class="__head">
            <h3 class="_gbl___head">Popular <span class="___ghead"> Questions </span>
                That Most Clients Ask From Us
            </h3>

        </div>
        <!--from here-->
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="accordion" id="formats">
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                How to get a paper from you in the correct format?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>The writers we have are proficient and can provide paper in any format you want. So
                                    you don’t
                                    have to worry about the format. Just choose the specific format like MLA, APA, or
                                    leave
                                    comments on any style while filling the or der form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                How do I know the expert is skilled enough to complete my task?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Papersnerd has skilled experts who are professional in various areas of study,
                                    including
                                    complex and rare disciplines. Moreover, we regularly widen our pool of writers to
                                    provide
                                    you with assistance in any academic field that exists. We are always ready to assist
                                    you
                                    with rare topics and love to work on challenging and complex assignments. You can
                                    also
                                    contact the writer who is doing your work and can ask him or her all questions that
                                    worry
                                    you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is it possible to get the essay edited?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Papersnerd provide unlimited free revisions and complete the essay with full
                                    responsibility.
                                    You can get your essay edited as many times as you want until you are completely
                                    satisfied.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                How can I be sure you provide original papers?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Uniqueness and quality matters as much to papersnerd writers as to your teachers, you
                                    need to
                                    know that. Plagiarism matters a lot, we agree that no one wants to pay for a service
                                    that
                                    does not guarantee uniqueness and customization. We have feedback from each customer
                                    to make
                                    sure that every writer we have is responsible and creates papers from scratch.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                How early can I receive an urgent task?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>We have a price plan according to the urgency and nature of the work. You can get
                                    your urgent
                                    paper within 3 or 5 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="accordion" id="formats">
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                How to get a paper from you in the correct format?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>The writers we have are proficient and can provide paper in any format you want. So
                                    you don’t
                                    have to worry about the format. Just choose the specific format like MLA, APA, or
                                    leave
                                    comments on any style while filling the or der form.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                How do I know the expert is skilled enough to complete my task?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Papersnerd has skilled experts who are professional in various areas of study,
                                    including
                                    complex and rare disciplines. Moreover, we regularly widen our pool of writers to
                                    provide
                                    you with assistance in any academic field that exists. We are always ready to assist
                                    you
                                    with rare topics and love to work on challenging and complex assignments. You can
                                    also
                                    contact the writer who is doing your work and can ask him or her all questions that
                                    worry
                                    you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Is it possible to get the essay edited?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Papersnerd provide unlimited free revisions and complete the essay with full
                                    responsibility.
                                    You can get your essay edited as many times as you want until you are completely
                                    satisfied.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                How can I be sure you provide original papers?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse9" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>Uniqueness and quality matters as much to papersnerd writers as to your teachers, you
                                    need to
                                    know that. Plagiarism matters a lot, we agree that no one wants to pay for a service
                                    that
                                    does not guarantee uniqueness and customization. We have feedback from each customer
                                    to make
                                    sure that every writer we have is responsible and creates papers from scratch.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item ques">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                How early can I receive an urgent task?
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </h2>
                        <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                            data-bs-parent="#formats">
                            <div class="accordion-body">
                                <p>We have a price plan according to the urgency and nature of the work. You can get
                                    your urgent
                                    paper within 3 or 5 hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--to there-->
</div>

</div>
<div class="row pilt">
    <div class="col-md-12 bottom">
        <div class="trusted">
            <div class="card">
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
