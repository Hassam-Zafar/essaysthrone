@extends('frontend.layouts.app')

@section('title')
{{ isset($pages->meta_title) ? $pages->meta_title : "Contact us" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Contact us" }}
@endsection

@section('tags')
{{ isset($pages->tags) ? json_decode($pages->tags) : "" }}
@endsection

@section('page_main_heading')
CONTACT US
@endsection



@section('content')

<section class="ftco-section" style="background-image: url('assets/img/bg-2.png');">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Contact us</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
          <div class="wrapper">
            <div class="row no-gutters">
              <div class="col-md-7 d-flex align-items-stretch">
                <div class="contact-wrap w-100 p-md-5 p-4">
                  <h3 class="getit mb-4">Get in touch</h3>
                  <div id="form-message-warning" class="mb-4"></div>
                  <div id="form-message-success" class="mb-4">
                  @include('admin.includes.message')
                  </div>
                  <form method="post" id="contact-form" action="{{ route('frontend.contactus_email') }}">
                  @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" id="yourName" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="yourEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="message" class="form-control" id="message" cols="30" rows="7"
                            placeholder="Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" value="Send Message" class="btn btn-primary">
                          <div class="submitting"></div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-5 d-flex align-items-stretch">
                <div class="info-wrap w-100 p-lg-5 p-4">
                  <h3 class="mb-4 mt-md-4">Contact us</h3>

                  <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-phone"></span>
                    </div>
                    <div class="text pl-3">
                      <p><span>Phone:</span> <a href="tel://1234567920" title="Give me a call">{{ isset($phone) ? $phone->value : '021-861-654-222' }}</a></p>
                    </div>
                  </div>
                  <div class="dbox w-100 d-flex align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-paper-plane"></span>
                    </div>
                    <div class="text pl-3">
                      <p><span>Email:</span> <a href="mailto:{{ isset($email) ? $email->value : 'info@gmail.com' }}" title="Send me an email">{{ isset($email) ? $email->value : 'info@gmail.com' }}</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- <div class="acd_section static-pages">
	<div class="container">
		<div class="row">
			<div class="offset-lg-2 offset-md-2 col-lg-8 col-md-8 col-sm-12 col-12">
				<div class="card">
					@include('admin.includes.message')
					<div class="title-form mb-1">
						<h3>Get in touch</h3>
						<p class="paras" style="text-align: left;">We’re very approachable and would love to speak to you. Feel free to call, send us an email or simply complete the enquiry form.</p>
					</div>
					<ul class="contact-list">
						<li class="list-item">
							<i class="fas fa-phone-alt fa-2x"></i>
							<span class="contact-text phone">
								<a class="btn btn-primary" href="#" title="Give me a call">{{ isset($phone) ? $phone->value : '021-861-654-222' }}</a>
							</span>
						</li>
						<li class="list-item">
							<i class="fas fa-envelope fa-2x"></i>
							<span class="contact-text gmail btn btn-primary"><a href="mailto:#" title="Send me an email">{{ isset($email) ? $email->value : 'info@gmail.com' }}</a></span>
						</li>
					</ul>
					<form method="post" id="contact-form" action="{{ route('frontend.contactus_email') }}">
						@csrf
						<div class="row">
							<div class="col">
								<fieldset class="form-group">
									<label for="yourName">Full Name*</label>
									<input type="text" class="form-control" id="yourName" placeholder="Enter Your Name" name="name" required>
								</fieldset>
							</div>
							<div class="col">
								<fieldset class="form-group">
									<label for="yourEmail">Email Address*</label>
									<input type="email" class="form-control" id="yourEmail" placeholder="Enter Your Email" name="email" required>
								</fieldset>
							</div>
						</div>
						<fieldset class="form-group">
							<label for="yourEmail">Message*</label>
							<textarea class="form-control" name="message" required></textarea>
						</fieldset>
						<div class="col-12 text-center">
							<button type="submit" class="btn _gbl_btn w-100" required>SEND MESSAGE</button>
						</div>
					</form>
				</div>
			</div>   
		</div>

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
</div> -->

@endsection