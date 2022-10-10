@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "Cookie & Policy" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Cookie & Policy" }}
@endsection

@section('tags')
{{ isset($pages->tags) ? json_decode($pages->tags) :  "Cookie & Policy" }}
@endsection

@section('page_main_heading')
ORDER
@endsection

@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/static.css') }}">
<style type="text/css">
    .small-header {
        height: 100px;
        background-position: 50% 63%;
    }
</style>
@endpush

@section('content')
<div class="ordrPage">
    <div class="container">
      <div class="main___head">
        <h3 class="heads">Get your <span>paper done</span> by an <span>expert</span> in your field! </h3>
    </div>
    <div class="row">
        <div class="col-lg-7 col-md-12 fromDiv">

          <div class="accordion" id="accordionExample">
            <div class="accordion-item ">
              <h2 class="accordion-header stepsForm moreSteps" id="headingOne">
                <button disabled class="accordion-button step" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <div>STEP 1/3 &nbsp;&nbsp;Type of work and deadline</div>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <!-- <div class="stepsForm"> -->
            <!-- <div>STEP 1/3 &nbsp;&nbsp;Type of work and deadline</div> -->
            <!-- </div> -->
            <div class="inputField">
                <p>Name</p>
                <input placeholder="Enter Your Name" />
            </div>
            <div class="inputField">
                <p>E-mail &nbsp; &nbsp; <span>(required)</span></p>
                <input placeholder="Enter Your Name" />
            </div>
            <div class="inputField phoneDiv">
                <p>Phone</p>
                <div class="phoneCountrySelect">
                  <input name="phone" type="text" id="phone" class="phoneSelect" />

                  <div class="phoneNumberDiv">
                    <p>+92</p>
                    <input class="phoneNumber" />
                </div>
            </div>
        </div>
        <div class="inputField">
            <p>Types Of Work</p>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
          </select>
      </div>
      <div class="inputField">
        <p>Subject &nbsp; &nbsp; <span>(required)</span></p>
        <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
  </div>
  <div class="inputField">
    <p>Academic Level</p>
    <div class="levels">
      <div class="active Tab">High School</div>
      <div class="Tab">College</div>
      <div class="Tab">Undergraduate</div>
      <div class="Tab">Master</div>
      <div class="Tab">ph.D</div>
  </div>
</div>
<div class="inputField doubleDIv">

    <div class="HalfDiv">
      <p>Number OF Pages</p>
      <div class="pageNumber">
        <div class="button">-</div>
        <input value="1" />
        <div class="button">+</div>
    </div>
</div>
<div class=" HalfDiv">
  <p>Spacing</p>
  <div class="levels">
    <div class="active Tab">Double-spaced</div>
    <div class="Tab">Single-spaced</div>
</div>
</div>
</div>
<div class="inputField">
    <p>Urgency</p>
    <select class="form-select" aria-label="Default select example">
      <option selected>7 days / Thus, Dec 02</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I want to receive order status update via text messages</p>
  </div>
</div>

<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I agree to <span class="blueLink">Terms And Conditiosn</span> and <span class="blueLink">Privacy
      Policy</span> <span class="requirded">* (Required)</span></p>
  </div>
</div>
<button class="nextButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
aria-expanded="true" aria-controls="collapseTwo">Next Step</button>
                  <!-- <div class="moreSteps">
                    <div class="step"></span></div>
                    <div class="step"></span></div>
                </div> -->

            </div>
        </div>
    </div>
    <div class="accordion-item ">
      <h2 class="accordion-header stepsForm moreSteps " id="headingTwo">
        <button disabled class="accordion-button collapsed step" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <div>STEP 2/3 &nbsp; <span>Additional paper Details</div>
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
    data-bs-parent="#accordionExample">
    <div class="accordion-body">
      <div class="inputField">
        <p>Name</p>
        <input placeholder="Enter Your Name" />
    </div>
    <div class="inputField">
        <p>E-mail &nbsp; &nbsp; <span>(required)</span></p>
        <input placeholder="Enter Your Name" />
    </div>
    <div class="inputField phoneDiv">
        <p>Phone</p>
        <div class="phoneCountrySelect">
          <input name="phone" type="text" id="phone" class="phoneSelect" />

          <div class="phoneNumberDiv">
            <p>+92</p>
            <input class="phoneNumber" />
        </div>
    </div>
</div>
<div class="inputField">
    <p>Types Of Work</p>
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="inputField">
    <p>Subject &nbsp; &nbsp; <span>(required)</span></p>
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="inputField">
    <p>Academic Level</p>
    <div class="levels">
      <div class="active Tab">High School</div>
      <div class="Tab">College</div>
      <div class="Tab">Undergraduate</div>
      <div class="Tab">Master</div>
      <div class="Tab">ph.D</div>
  </div>
</div>
<div class="inputField doubleDIv">

    <div class="HalfDiv">
      <p>Number OF Pages</p>
      <div class="pageNumber">
        <div class="button">-</div>
        <input value="1" />
        <div class="button">+</div>
    </div>
</div>
<div class=" HalfDiv">
  <p>Spacing</p>
  <div class="levels">
    <div class="active Tab">Double-spaced</div>
    <div class="Tab">Single-spaced</div>
</div>
</div>
</div>
<div class="inputField">
    <p>Urgency</p>
    <select class="form-select" aria-label="Default select example">
      <option selected>7 days / Thus, Dec 02</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I want to receive order status update via text messages</p>
  </div>
</div>

<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I agree to <span class="blueLink">Terms And Conditiosn</span> and <span class="blueLink">Privacy
      Policy</span> <span class="requirded">* (Required)</span></p>
  </div>
</div>
<button class="nextButton" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
aria-expanded="true" aria-controls="collapseThree">Next Step</button>
</div>
</div>
</div>
<div class="accordion-item ">
  <h2 class="accordion-header stepsForm  moreSteps" id="headingThree">
    <button disabled class="accordion-button collapsed step" type="button" data-bs-toggle="collapse"
    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    STEP 3/3 &nbsp; <span>Extra service
    </button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
data-bs-parent="#accordionExample">
<div class="accordion-body">
  <div class="inputField">
    <p>Name</p>
    <input placeholder="Enter Your Name" />
</div>
<div class="inputField">
    <p>E-mail &nbsp; &nbsp; <span>(required)</span></p>
    <input placeholder="Enter Your Name" />
</div>
<div class="inputField phoneDiv">
    <p>Phone</p>
    <div class="phoneCountrySelect">
      <input name="phone" type="text" id="phone" class="phoneSelect" />

      <div class="phoneNumberDiv">
        <p>+92</p>
        <input class="phoneNumber" />
    </div>
</div>
</div>
<div class="inputField">
    <p>Types Of Work</p>
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="inputField">
    <p>Subject &nbsp; &nbsp; <span>(required)</span></p>
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="inputField">
    <p>Academic Level</p>
    <div class="levels">
      <div class="active Tab">High School</div>
      <div class="Tab">College</div>
      <div class="Tab">Undergraduate</div>
      <div class="Tab">Master</div>
      <div class="Tab">ph.D</div>
  </div>
</div>
<div class="inputField doubleDIv">

    <div class="HalfDiv">
      <p>Number OF Pages</p>
      <div class="pageNumber">
        <div class="button">-</div>
        <input value="1" />
        <div class="button">+</div>
    </div>
</div>
<div class=" HalfDiv">
  <p>Spacing</p>
  <div class="levels">
    <div class="active Tab">Double-spaced</div>
    <div class="Tab">Single-spaced</div>
</div>
</div>
</div>
<div class="inputField">
    <p>Urgency</p>
    <select class="form-select" aria-label="Default select example">
      <option selected>7 days / Thus, Dec 02</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
  </select>
</div>
<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I want to receive order status update via text messages</p>
  </div>
</div>

<div class="checkbox">
    <div class="innerCheckBox">
      <input type="checkbox" />
      <p> I agree to <span class="blueLink">Terms And Conditiosn</span> and <span class="blueLink">Privacy
      Policy</span> <span class="requirded">* (Required)</span></p>
  </div>
</div>
<button class="nextButton">finish</button>
</div>
</div>
</div>
</div>




<!-- 
          <div class="stepsForm">
            <div>STEP 1/3 &nbsp;&nbsp;Type of work and deadline</div>
          </div>
          <div class="inputField">
            <p>Name</p>
            <input placeholder="Enter Your Name" />
          </div>
          <div class="inputField">
            <p>E-mail &nbsp; &nbsp; <span>(required)</span></p>
            <input placeholder="Enter Your Name" />
          </div>
          <div class="inputField phoneDiv">
            <p>Phone</p>
            <div class="phoneCountrySelect">
              <input name="phone" type="text" id="phone" class="phoneSelect" />

              <div class="phoneNumberDiv">
                <p>+92</p>
                <input class="phoneNumber" />
              </div>
            </div>
          </div>
          <div class="inputField">
            <p>Types Of Work</p>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="inputField">
            <p>Subject &nbsp; &nbsp; <span>(required)</span></p>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="inputField">
            <p>Academic Level</p>
            <div class="levels">
              <div class="active Tab">High School</div>
              <div class="Tab">College</div>
              <div class="Tab">Undergraduate</div>
              <div class="Tab">Master</div>
              <div class="Tab">ph.D</div>
            </div>
          </div>
          <div class="inputField doubleDIv">

            <div class="HalfDiv">
              <p>Number OF Pages</p>
              <div class="pageNumber">
                <div class="button">-</div>
                <input value="1" />
                <div class="button">+</div>
              </div>
            </div>
            <div class=" HalfDiv">
              <p>Spacing</p>
              <div class="levels">
                <div class="active Tab">Double-spaced</div>
                <div class="Tab">Single-spaced</div>
              </div>
            </div>
          </div>
          <div class="inputField">
            <p>Urgency</p>
            <select class="form-select" aria-label="Default select example">
              <option selected>7 days / Thus, Dec 02</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="checkbox">
            <div class="innerCheckBox">
              <input type="checkbox" />
              <p> I want to receive order status update via text messages</p>
            </div>
          </div>

          <div class="checkbox">
            <div class="innerCheckBox">
              <input type="checkbox" />
              <p> I agree to <span class="blueLink">Terms And Conditiosn</span> and <span class="blueLink">Privacy
                  Policy</span> <span class="requirded">* (Required)</span></p>
            </div>
          </div>
          <button class="nextButton">Next Step</button>
          <div class="moreSteps">
            <div class="step">STEP 2/3 &nbsp; <span>Additional paper Details</span></div>
            <div class="step">STEP 3/3 &nbsp; <span>Extra service</span></div>
        </div> -->

    </div>
    <div class="col-lg-5 col-md-12 rightCart">
      <div class="cartAmount">
        <div class="item">
          <h5>Essay</h5>
          <p>College</p>
      </div>
      <div class="item">
          <p>College</p>
          <p>College</p>
      </div>
      <div class="item">
          <h5>Promo Code</h5>
          <p>You save $3.00</p>
      </div>
      <div class="item TotalCart">
          <div class="totalItem">
            <p class="totaltext">Total Cost</p>
            <p><s>$26.69</s><b>$21.25</b></p>
        </div>
    </div>
    <div class="cardsAccepted">
      <img src="{{ asset('frontend/aw1o/www.freepnglogos.com/uploads/visa-card-logo-9.png') }}" />
      <img src="{{ asset('frontend/aw1o/www.freepnglogos.com/uploads/visa-card-logo-9.png') }}" />
      <img src="{{ asset('frontend/aw1o/www.freepnglogos.com/uploads/visa-card-logo-9.png') }}" />
      <img src="{{ asset('frontend/aw1o/www.freepnglogos.com/uploads/visa-card-logo-9.png') }}" />
      <img src="{{ asset('frontend/aw1o/www.freepnglogos.com/uploads/visa-card-logo-9.png') }}" />

  </div>
</div>
</div>
<div class="col-lg-10 col-md-12 ">
  <div class="paymentSteps">

    <div class="paymentData">
      <h5>Secure Online Payment</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat maxime, eaque deserunt ducimus
      reiciendis deleniti. Quae eveniet, </p>
  </div>
  <div class="paymentData">
      <h5>Secure Online Payment</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat maxime, eaque deserunt ducimus
      reiciendis deleniti. Quae eveniet, </p>
  </div>
  <div class="paymentData">
      <h5>Secure Online Payment</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat maxime, eaque deserunt ducimus
      reiciendis deleniti. Quae eveniet, </p>

  </div>
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