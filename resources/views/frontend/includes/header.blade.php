@include('frontend.includes.nav')

<!-- <section id="hero" class="d-flex align-items-center">
    <div class="container  align-items-center" data-aos="zoom-out" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-5 col-lg-3 text-center text-lg-start order-lg-1 order-1">
          <h1>Lorem ipsum dolor sit amet,<br>consectetur.</h1>
          <h2>Lorem ipsum dolor sit amet,consectetur adipis cing elit.<br> Elementum nisi aliquet volutpat.</h2>
          <div class="d-sm-flex justify-content-center d-md-block">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-7 col-lg-3 text-right order-lg-2 order-2">
          <img src="{{ asset('frontend/assets/img/right-image.png') }}" class="img-fluid ">
        </div>
      </div>
    </div>
</section> -->
<!-- 
@if(in_array(Route::currentRouteName(),['frontend.index','frontend.services','frontend.essay_writing','frontend.assignments','frontend.research_papers','frontend.thesis','frontend.article_reviews']))
<div class="">
    <div class="container">
        <div class="row essay_writing">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                @if(in_array(Route::currentRouteName(),['frontend.index']))
                <div class="__head">
                    <h3 class="_gbl___head" style="font-size: 35px!important;"> Custom Writing Services
                        {{-- <span class="___ghead">Professionally-Researched and  <br> Expertly-Written </span><span class="typed">Essay</span><br> With WritersGeek --}}
                    </h3>
                </div>
                <p class="acd_para" style="font-size: 25px!important;">Professional Writing Services, Tailored & Personalized according to your needs</p>
                <br><br>
                @endif
                @if(in_array(Route::currentRouteName(),['frontend.services']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
               @if(in_array(Route::currentRouteName(),['frontend.essay_writing']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
               @if(in_array(Route::currentRouteName(),['frontend.assignments']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
               @if(in_array(Route::currentRouteName(),['frontend.research_papers']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
               @if(in_array(Route::currentRouteName(),['frontend.thesis']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
                @if(in_array(Route::currentRouteName(),['frontend.article_reviews']))
                <div class="__head">
                    <h3 class="_gbl___head"> Utilize WritersGeek 
                        <span class="___ghead">Essay Writing <br> Services </span>For Scoring A Grade
                    </h3>
                </div>
                <p class="acd_para">
                   We are here to assist those students who cannot complete their essays on the given deadlines and always achieve low grades due to their hectic and rushed routine.
               </p>
               @endif
               <div class="cont_dtl">
                <a href="{{ route('frontend.order') }}" class="btn _gbl_btn order-btn">Order Now</a>
                <a href="javascript:void(Tawk_API.toggle())" class="btn _gbl_btn" type="button">LIVE CHAT</a>
        </div>
    </div>
    <style type="text/css">
        .form-select{
            color: #045282;
        }
    </style>

    <div class="col-lg-6 col-md-6 col-sm-6 col-12 rht_area">
        <div class="card order_price">
            <div class="card-body">
                <div class="_order_area">
                    <h2 class="cal">Calculate Your Order Price</h2>
                    <span class="unlock">Get 50% off Limited Time Offer</span>
                    <form method="GET" action="{{ url('order') }}" id="calculatePrice">
                        <input type="hidden" name="domain_id" value="{{config('app.domain_id')}}">
                        <input type="hidden" name="manual_discount_amount" value="0">
                        <div class="selected_ps">
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example"
                                id="type_of_works" name="price_plan_type_of_work_id"
                                onchange="calculatePrice()"></select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" id="levels"
                                name="price_plan_level_id" onchange="calculatePrice()"></select>
                            </div>
                            <div class="mb-3 all_info">
                                <div class="_select">
                                    <select class="form-select" aria-label="Default select example"
                                    id="urgencies" name="price_plan_urgency_id"
                                    onchange="calculatePrice()"></select>
                                </div>
                                <div class="box">
                                    {{-- <div class="pages">
                                        <span class="txt">Pages</span>
                                        <div class="no_of_pgs">
                                            <div class="minus">
                                                <span class="del numbtn">-</span>
                                            </div>
                                            <div class="number">
                                                <span class="val">1</span>
                                                <input type="hidden" name="price_plan_no_of_page_id" id="pages"
                                                value="1">
                                            </div>
                                            <div class="pls">
                                                <span class="add numbtn">+</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="pages">
                                        <span class="txt">Pages</span>
                                        <div class="no_of_pgs" style="width:fit-content; padding: 0;">
                                            <div class="minus" style="padding:0">
                                                <span class="del numbtn" style="width: 40px; padding: 6px 0">-</span>
                                            </div>
                                            <div class="number" style="padding:0">
                                                <span class="val" style="width: 40px; padding: 6px 0">1</span>
                                                <input type="hidden" name="price_plan_no_of_page_id" id="pages"
                                                value="1">
                                            </div>
                                            <div class="pls" style="padding:0">
                                                <span class="add numbtn" style="width: 40px; padding: 6px 0">+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" id="subjects"
                                name="price_plan_subject_id"></select>
                            </div>
                        </div>
                        <hr>
                        <div class="dis_counted_details">
                            <div class="standard_price">
                                <span class="std">Standard Price</span>
                                <div class="dlar">
                                    <span class="amnt">$<s id="service_cost">15.00</s></span>
                                </div>
                            </div>
                            <div class="standard_price">
                                <span class="dis">Discount</span>
                                <div class="perce">
                                    <span class="dlr_dis">50%</span>
                                </div>
                            </div>
                            <div class="all_dtl">
                                <div class="after_dis">
                                    <span>Price After Discount:</span>
                                </div>
                                <div class="tl_price">
                                    <b>$<span id="grand_total_amount">7.50</span></b>
                                </div>
                            </div>
                        </div>
                        <div class="order">
                            <button class="btn __btns" type="submit">Proceed to Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div> -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" integrity="sha512-3J8teBiHrSyaaRBajZyIEtpDsXdPq1gsznKWIVb5CnorQuFhjWGhWe54z8YNnHHr7MZuExb9m5kvf964HiT1Sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    var typed = new Typed('.typed', {
      strings: ["Essay", "Research Paper", "Coursework", "Dissertation", "Assignment"],
      typeSpeed: 50,
      backSpeed: 50,
      loop: true,
    });
</script> --}}
@endif