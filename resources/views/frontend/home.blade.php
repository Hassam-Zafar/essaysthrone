@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "Homepage" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Homepage" }}
@endsection

@section('tags')
{{ $pages->tags ?? "Homepage" }}
@endsection

@section('content')
<style>
  
  /* .number{
			margin:100px;
		} */
    .minus, .plus {
    width: 10%;
    height: 100%;
    background: #fece14;
    border-radius: 4px;
    padding: 7px 5px 8px 5px;
    border: 1px solid #ddd;
    display: inline-block;
    /* vertical-align: middle; */
    text-align: center;
    cursor: pointer;
    margin-bottom: -1%;
}

      .pages-count {
    height: 100%;
    width: 25%;
    text-align: center;
    font-size: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    display: inline-block;
    /* vertical-align: middle; */
}
.card-header .title {
    font-size: 17px;
    color: #000;
}
.card-header .accicon {
  float: right;
  font-size: 20px;  
  width: 1.2em;
}
.card-header{
  cursor: pointer;
  border-bottom: none;
}
.card{
  border: 1px solid #ddd;
}
.card-body{
  /* border-top: 1px solid #ddd; */
}
.card-header:not(.collapsed) .rotate-icon {
  transform: rotate(180deg);
}
  .collapsed .iconset {
transform: rotate(180deg);
transition: .3s ease-in-out;
}
.our-service-heading{
    margin-top:4%;
}
.service-icon{
    width:50px;
}
.float-button-header {
        text-decoration: none;
        /* position: fixed; */
        padding: 10px;
        margin-left:3%;
        padding-right: 15px;
        bottom: 30px;
        right: 30px;
        color: #fff;
        background-color:#25D366;
        border-radius: 25px 30px 5px 25px;
        z-index: 100;
        font-family: Arial;
        font-size: 17px;
        animation: whatsapp-animation 0.5s ease-in-out;
        box-shadow: 1px 2px 5px 2px rgba(30,30,30,0.3);
        transition:all 0.3s ease-out;
    }

    .float-button-header:hover {
         background-color: #128C7E;
          color: #fff;
    }

    @keyframes whatsapp-animation {
        from {
            opacity: 0%;
        }

        to {
            opacity: 100%
        }
    }

    @media screen and (max-width: 545px) {


        .float-button-header {
            margin-left: 2px !important;
            display:none;
        }
    }

</style>
<section id="hero" class="d-flex ">
    <div class="container " data-aos="zoom-out" data-aos-delay="100">
      <div class="row align-items-center">
        <div class="col-lg-5 col-lg-3  text-lg-start order-lg-1 order-1">
          <h3>Research- based, 100% free of plagiarism dissertation completed by the experts<br></h3>
          <p>Get your dissertation done professionally resulting in helping you secure higher grades at academics. </p>
          <div class="d-sm-flex justify-content-center d-md-block">
            <a href="javascript:void(Tawk_API.toggle())" class="btn-get-started scrollto">Live Chat</a>
            <a href="{{ route('frontend.order') }}" class="btn-get-started scrollto">Order Now</a>
            <a class="float-button-header" target="_blank" href="https://api.whatsapp.com/send?phone=+447520665751&text=Say%21%20Hello%20.">
                <i class="fa fa-whatsapp" aria-hidden="true" style="font-size:20px; padding-left:5px; padding-right:5px;"></i>
                <span>Message us<span>
            </a>
          </div>
          <div class="d-sm-flex justify-content-center d-md-block">
            
          </div>
        </div>
        <div class="col-lg-7 col-lg-3 text-right order-lg-2 order-2">
          <img src="{{ asset('frontend/assets/img/right-image.png') }}" class="img-fluid ">
        </div>
      </div>
    </div>
</section>

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="row'">
        <h3 class="text-center ">Our Services</h3>
      </div>
      <div class="row d-flex align-items-center">
        <div class="textset col-lg-4 pt-4 pt-lg-0 text-center text-lg-center order-lg-1 order-1">
          <h5 class="text-center ">The Service We Provide<br> For You</h5>
          <p class="text-center">In order to help thousands of students succeed academically, Essays Throne is one of the best academic solution providers online. We are aware of how demanding writing assignments may be. Being one of the top providers of expert academic writing services, we have worked with enough clients to understand the typical difficulties that students run into when completing their academic essays.
        </p>
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column order-lg-2 order-2 justify-content-center ">
          <ul>
            <li>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0 ">
                <h5 class="our-service-heading"> Essay Writing (Any Kind of Essay)</h5>
               
              </div>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Assignment Writing Service</h5>
             
              </div>
            </li>
            <li>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Thesis Writing Service
                </h5>
               
              </div>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading"> Research Paper Writing</h5>
            
              </div>
            </li>
            <li>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Term Paper Writing</h5>
             
              </div>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Paper Writing Service </h5>
              
              </div>
            </li>

            <li>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Dissertation Writing Service</h5>
             
              </div>
              <div class="icon service-icon"><img src="{{ asset('frontend/assets/img/services.png') }}" class="img-fluid "></div>
              <div class="textset col-lg-5 pt-4 pt-lg-0">
                <h5 class="our-service-heading">Research Proposal   </h5>
            
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="d-flex align-items-center">
    <div class="container  align-items-center" data-aos="zoom-out" data-aos-delay="100">
      <div class="row'">
        <h3 class="text-center ">Our Pricing</h3>
      </div>
      <div class="row align-items-center">
        <div class="imgset col-lg-5 col-lg-3 text-right order-lg-2 order-lg-1">

          <div class="container calc py-4">
            <div class="calc_det col-lg-12 col-md-12 ">
            <form method="GET" action="{{ url('order') }}" id="calculatePrice">
              <center class="section-title ">
                <h5 class="text-center ">Calculate your order’s price </h5>
              </center>
              <input type="hidden" name="manual_discount_amount" value="0">
              <input type="hidden" name="domain_id" value="{{config('app.domain_id')}}"> 
              <div class="pap text-left">
              <label>Type of Document</label>
              </div>
              <div class="deadln  d-flex align-items-center ">
              <select class="paper form-select" id="type_of_works" name="price_plan_type_of_work_id" onchange="calculatePrice()">
              </select>
              </div>
              <div class="academiclvl text-left">
                <label>Academic Level</label>
              </div>
              <div class="deadln  d-flex align-items-center ">
                <select id="levels" name="price_plan_level_id" class="paper form-select" onchange="calculatePrice()">
                </select>
              </div>
           
              <div class="deadln d-flex align-items-center text-left">
                <label>Deadline</label>
              </div>

              <!-- <input type="date" id="urgencies" name="price_plan_urgency_id" onchange="calculatePrice()" class="deadline"> -->

              <select class="paper form-select" aria-label="Default select example"
                                    id="urgencies" name="price_plan_urgency_id"
                                    onchange="calculatePrice()"></select>

              <div class="row quan text-left">
                <label>Quantity</label>
              </div>
              <div class="row">

              <div class="number text-left">
                <button class="minus del">-</button>
                <input class="pages-count" name="price_plan_no_of_page_id" id="pages" type="text" value="1"/>
                <button class="plus pls add">+</button>
              </div>
              
              
              </div>
              <div class="row deadln text-left">
              </div>

              <div class="d-sm-flex">

                  <button type="submit" class="order scrollto">Proceed to order</button>


              </div>
            </form>
            </div>
          </div>
        </div>
        <div class="textset col-lg-7 col-lg-3 text-lg-start order-lg-2 order-2">
          <h2>Custom Paper Writing <br>Service</h2>
          <br>
          <ul>
            <li>
              No Plagiarism Guarantee with Turnitin Report
            </li>
            <li>
              100% Original & Custom Always In-depth research
            </li>
            <li>
              Don’t Miss Deadlines or You Get a Full Refund
            </li>
            <li>
              Money-Back Guaranty if you are not satisfied
            </li>
          </ul>
          <br>
          <div class="d-flex">
            <a href="{{ url('order') }}" class="btn-get-started scrollto">Write My Paper</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<section id="steps" class="steps">
    <div class="container">
      <div class="row">
        <div class="section-title">
          <h3 class="text-center ">Get Quality Papers in 3 Easy Steps</h3>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('frontend/assets/img/step-1.png') }}" class="img-fluid "></div>
            <h4><a href="">Share Project Details </a></h4>
            <p>The first and foremost step to avail our services includes sharing the project details. You need to provide us details for the assignment you want to get done with, along with special notes or specifications. We consider and include them all in our writings. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('frontend/assets/img/step-2.png') }}" class="img-fluid "></div>
            <h4><a href="">Pay for your Dissertation </a></h4>
            <p>After project details are shared and both parties agree on the contract. The very next step will be to pay for your work required to be done. Once you transfer the amount, your order is confirmed and rest assured. You’ll get quality services with every detail carefully curated, as you want it! </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><img src="{{ asset('frontend/assets/img/step-3.png') }}" class="img-fluid "></div>
            <h4><a href="">Receive your order </a></h4>
            <p>The last and final step of the whole process is receiving your order through email or a decided medium. Your orders will be delivered within the specified deadlines, and we’ll be open to make any modifications you want to get done in the final submission according to the guidelines provided. Your satisfaction is our utmost priority. 
</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bannerset row d-flex justify-content-center">

      <div class="imgset12 col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <img src="{{ asset('frontend/assets/img/banner_illust.png') }}" class="img-fluid ">
      </div>
      <div class="textset col-lg-6 col-lg-3 text-center text-lg-start order-lg-1 order-1">
        <h2>Lorem ipsum dolor sit amet,<br>consectetur.</h2>
        <p>Lorem ipsum dolor sit amet,consectetur adipis cing elit.<br> Elementum nisi aliquet volutpat.</p> 
        <div class="banner-buttons">
          <a href="{{ url('order') }}" class="btn-get-started scrollto">Write My Paper</a>
          <a href="javascript:void(Tawk_API.toggle())" class="btn-get-started scrollto">Chat Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ======= features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="section-title">
          <h3 class="text-center ">Why Us</h3>
        </div>
      </div>
      <div class="row ">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat1.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">Our Skilled Writers </a></h4>
            <p>Our professional academic writers have several years of experience in this area, which certainly gives them an advantage when it comes to the work they do. Experts at our firm possess a great deal of knowledge as well as skill and experience.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat2.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">100% Free of Plagiarism </a></h4>
            <p>The work you entrust to us will always be delivered to you without any plagiarism ratio. We offer plagiarism removal support (for either paraphrasing or proper citation and references) so no student has to suffer for such traces of plagiarism. The plagiarism concern wouldn’t be yours anymore after trusting us. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat3.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">	24/7 Customer Service </a></h4>
            <p>24/7 customer service available. Yes, you heard it right. Our customer support will be available at any time of the day to help you with your concerns and queries. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat4.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">Fast Turnaround </a></h4>
            <p>Meeting deadlines is our top most priority. We never compromise on the deadlines assigned to us, either it’s the task you need around a day or few hours or in a wide span of time. We always strive hard to deliver it whenever you need it! </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat5.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">Customer Satisfaction</a></h4>
            <p>Satisfying customers is our utmost priority at EssaysThrone. We believe that success of business lies in customer satisfaction. We make sure to deliver the top-notch quality work. </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon">
              <img src="{{ asset('frontend/assets/img/feat6.png') }}" class="img-fluid ">
            </div>
            <h4><a href="">Quick Result</a></h4>
            <p>You don’t need to worry anymore about getting quick results for your work. We take care of it and within our full capacity we make sure to deliver it to you at our earliest. 
</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End features Section -->

  <!-- ======= testimonial Section ======= -->
  <section id="testimonial" class="testimonial">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="section-title">
          <h3 class="text-center ">Testimonial</h3>
        </div>
      </div>

      <div class="row align-items-center" style="margin-top:-10%;">
        <div class=" col-lg-5 col-lg-3 text-right order-lg-2 order-lg-1">
          <img src="{{ asset('frontend/assets/img/testimonial.png') }}" class="img-fluid">
        </div>
        <div class="textset col-lg-7 col-lg-3 text-center text-lg-start order-lg-2 order-2">
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <p class="section-title text-secondary justify-content-center"><span></span></p>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-2x mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/testimonial/img/testimonial-1.jpg') }}"
                            style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-2x mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/testimonial/img/testimonial-2.jpg') }}"
                            style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded my-4">
                    <p class="fs-5"><i class="fa fa-quote-left fa-2x mt-n4 me-3"></i>Diam dolor diam ipsum
                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo
                        justo.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('frontend/testimonial/img/testimonial-3.jpg') }}"
                            style="width: 65px; height: 65px;">
                        <div class="ps-4">
                            <h5 class="mb-1">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </div>
  </section><!-- End testimonial Section -->

  
    <!-- Features Start -->
    <div class="container-xxl feature-at py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-warning ps-4 mb-5">
              <h3 class="mb-0">
                Our Free Features
              </h3>
            </div>
            <p class="mb-5">
              Along with being a paid service, we have multiple free features to offer our customers. You can get facilitated from our free features, and get the best quality work produced. 
            </p>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Large number of services provided</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">25+ years of professional experience</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">A large number of grateful customers</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Always reliable and affordable prices</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">A large number of grateful customers</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Always reliable and affordable prices</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-warning ps-4 mb-5">
              <h3 class="mb-0">
                Our Paid Features
              </h3>
            </div>
            <p class="mb-5">
              Our paid features are specifically designed with reasonable rates to help out customers with the assignments they are found struggling at their academics. With EssayThrone, no more worries. 

            </p>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Large number of services provided</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">25+ years of professional experience</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">A large number of grateful customers</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Always reliable and affordable prices</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">A large number of grateful customers</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i class="icon-color fa fa-check fa-2x flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Always reliable and affordable prices</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center">
    <div class="banner_2 col-lg-12">
      <div class="row py-3">
      <div class="col-lg-7 px-5 order-lg-1 order-1  d-flex align-items-center ">
          <div>
            <div class="description col-lg-12 order-md-0 section-title position-relative">
              <h2 class=" font-secondary">Lorem Ipsum</h2>
            </div>
            <p class="mb-4">Let our subject-matter experts possessing years of writing experience handle
              your
              challenging writing tasks for you.</p>
              <div class="banner-buttons">
                  <a href="{{ url('order') }}" class="btn-order">Write My Paper</a>
                  <a href="javascript:void(Tawk_API.toggle())" class="btn-livechat">Chat Now</a>
              </div>
          </div>
        </div>
        <div class="col-5 d-flex justify-content-center order-lg-2 order-2 order-md-2">
          <img src="{{ asset('frontend/assets/images/footer-banner.png') }}" class="banner_img">
        </div>
      </div>
    </div>
  </div>

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="section-title">
          <h3 class="text-center ">Frequently Asked Questions</h3>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-4 justify-content-center">
          <ul class="faq-list">

            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">	Do I have to pay in advance? <img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }} " class="img-fluid"></div>
                
              <div id="faq1" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  The service is paid for in advance, yes. Payment in advance is required. But don't worry; if you're not happy with the outcome, we offer an unlimited number of modifications.
                </p>
              </div>
            </li>
            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq2">	Are the services at Essay Throne legit?<img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }} " class="img-fluid"></div>
              <div id="faq2" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  We primarily utilize PayPal for transactions between parties involved in the process. PayPal has vetted us, ensuring both our legitimacy and the safety of our customers. You won't be concerned about purchasing a fake item because of this.
                </p>
              </div>
            </li>
            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq3">	How can I be sure the business provides original work? <img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }}" class="img-fluid"></div>
              <div id="faq3" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  You need to be aware that Essays Throne authors place equal value on originality and quality as they do on your lecturers. Plagiarism is important, and we both agree that nobody wants to pay for a service that does not provide originality and customization. Every consumer provides feedback, which we use to ensure that every writer is responsible and writes original work carefully completed.
                </p>
              </div>
            </li>

            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq4">4.	How do I know the Essay writer for my assignment is competent enough to tackle the task? <img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }}" class="img-fluid"></div>
              <div id="faq4" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  Our writers expert in a variety of academic subjects, including challenging and uncommon ones. To help you in any academic field that exists, they are always there. We enjoy working on challenging tasks delegated to us and look forward to keeping updating our writing skills with the changing requirements. Our writers are always prepared to help you with uncommon topics. Additionally, you are welcome to get in touch with the author who is working on your academic assignment and ask away any worries you have. 
                </p>
              </div>
            </li>

            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq5">Can you deliver work at a very short notice period? 
<img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }}" class="img-fluid"></div>
              <div id="faq5" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  Yes absolutely, getting work at a very short notice period is no more a worrisome task. At EssaysThrone we are committed to provide your assignments within the required deadline. 

                </p>
              </div>
            </li>

            <li class="p-4">
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq6">Is getting work done through EssayThrone safe? 
<img class="iconset" src="{{ asset('frontend/assets/img/faqicon.png') }}" class="img-fluid"></div>
              <div id="faq6" class="faqtext collapse" data-bs-parent=".faq-list">
                <p>
                  It’s 100% safe, we make sure to keep your details fully confidential between the parties you allow only. We take care of any personal details shared, and keep your privacy at priority. 
                </p>
              </div>
            </li>

          </ul>
        </div>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

@endsection