
<!-- footer start -->
<footer id="footer">


<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-5 col-md-6 footer-contact">
        <h3>Essay Throne<span>.</span></h3>
        <p>
            Essays Throne main purpose is to help students in every little way we can. We offer a wide range of topics and deal with every type of content there is. We make the students' lives easier by providing material that is useful for research purposes only. We do not condone our research material to be used for academic grading.
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Company</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}#services">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.pricing') }}">Pricing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}#features">Features</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.index') }}#testimonial">Why Us</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Policies</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.termsconditions') }}">Terms & Conditions</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.privacypolicy') }}">Privacy Policy</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.cookiepolicy') }}">Cookie Policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Contact us</h4>
        <li class="contact-us-footer">
            <a href="#" style="pointer-events: none;"><h6>
                <i class="fas fa-phone-alt"></i> 
                {{ isset($phone) ? $phone->value : '+44 (752) 066-5751' }}
                </h6>
            </a>
        </li>
        <li class="contact-us-footer">
            <a style="pointer-events: none; --bs-gutter-x:0rem!important"  href="#">
                <h6>
                 <i class="fas fa-envelope"></i> 
               {{ isset($email) ? $email->value : 'info@essaysthrone.com' }}
                </h6>
            </a>
        </li>
                    
        <div class="social-links mt-3">
          <a href="{{ isset($twitter) ? $twitter->value : '' }}" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="{{ isset($fb) ? $fb->value : '' }}" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="{{ isset($instagram) ? $instagram->value : '' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
          <!--<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
        </div>
      </div>

    </div>
  </div>
</div>
</footer>
<!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short">
        </i>
    </a>