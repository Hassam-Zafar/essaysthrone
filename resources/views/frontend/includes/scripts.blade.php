
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/flexslider/flexslider-min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js" defer></script>

<script src="{{ asset('frontend/testimonial/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/testimonial/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/testimonial/lib/waypoints/waypoints.min.js') }}"></script> 
<script src="{{ asset('frontend/testimonial/lib/counterup/counterup.min.js') }}"></script>  
<script src="{{ asset('frontend/testimonial/lib/owlcarousel/owl.carousel.min.js') }}"></script>  
<script src="{{ asset('frontend/testimonial/lib/isotope/isotope.pkgd.min.js') }}"></script> 
<script src="{{ asset('frontend/testimonial/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('frontend/testimonial/js/main.js') }}"></script>

<script>
    let domain_id = `{{config('app.domain_id')}}`;
    let crm_api = `{{config('app.crm_api')}}`;
</script>
<script src="{{ asset('frontend/assets/js/calculate.js') }}"></script>

<script src="{{ asset('userarea/build/js/intlTelInput.js') }}"></script>
<script>
    var input = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(input, {
       initialCountry: "auto",
       geoIpLookup: getIp,
       utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
    function getIp(callback) {
       fetch('https://ipinfo.io/json?token=1d364502c79a33', { headers: { 'Accept': 'application/json' }})
       .then((resp) => resp.json())
       .catch(() => {
           return {
             country: 'us',
         };
     })
       .then((resp) => callback(resp.country));
   }
</script>

<script src="{{ asset('frontend/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
<script>
    
    $("#closesize").click(function(){
        $('#discount-modal').modal('hide');
    });
    $(document).ready(function(){
        $('.tool_tip').tooltip({trigger:'manual'}).tooltip('show');

    setTimeout(showDiscountModal, 5000);

    function showDiscountModal(){
        var is_modal_show = sessionStorage.getItem('alreadyShow');
        if(is_modal_show != 'already shown'){
            sessionStorage.setItem('alreadyShow','already shown');
            $("#discount-modal").modal('show');
        }else{
            console.log(is_modal_show);
        }
    }
    });
</script>

<script>
    window.addCurrentSlidesClass = function (slider) {
        $('.flexslider li').removeClass("active-slides");
        var startli = (slider.move * (slider.currentSlide));
        var endli = (slider.move * (slider.currentSlide + 1));
        for (i = startli + 1; i <= endli; i++) {
            $('.flexslider li:nth-child(' + i + ')').addClass('active-slides');
        }
    }
</script>
<script>
    $('.acdemics_dtl').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: false,
        itemWidth: 560,
        itemMargin: 30,

        controlNav: false,

        start: function (slider) {
            window.addCurrentSlidesClass(slider);
        },
        after: function (slider) {
            window.addCurrentSlidesClass(slider);
        }
    });

    window.addCurrentSlidesClass = function (slider) {
        $('.acdemics_dtl .sliders').removeClass("active-slides");
        var startli = (slider.move * (slider.currentSlide));
        var endli = (slider.move * (slider.currentSlide + 2));
        for (i = startli + 2; i <= endli; i++) {
            $('.acdemics_dtl .sliders:nth-child(' + i + ')').addClass('active-slides');
        }
    }
</script>
<script>
    let see_all = document.querySelectorAll(".see_all");
    const clickHandlers = (e, item) => {
        let targetLiting = event.target.parentElement.children[0];
        targetLiting.classList.toggle("active__reviews")
    }
    see_all.forEach((item) => {
        item.addEventListener("click", (e) => clickHandlers(event, item));
    });
</script>
<script>
    	$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
</script>
<script>
    let add = document.querySelectorAll(".numbtn");
    let val = document.querySelector(".val");
    let pls = document.querySelector(".add");
    var counter = 0;
    add.forEach((item) => {
      item.addEventListener("click", (e) => {
        if (item.classList.contains("add")) {
            if (counter != 99) {
                counter = counter + 1;
            }
        }
        if (item.classList.contains("del")) {
            if (counter != 0) {
                counter = counter - 1;
            }
        }
        val.innerHTML = counter;
        $("#pages").val(counter)
        calculatePrice()
    })
  })

    $(document).on('click','.showSignUp',function(){
        $('#loginform').addClass('d-none');
        $('#forgotform').addClass('d-none');
        $('#signupform').removeClass('d-none');
    });

    $(document).on('click','.showSignIn',function(){
        $('#signupform').addClass('d-none');
        $('#forgotform').addClass('d-none');
        $('#loginform').removeClass('d-none');
    });

    $(document).on('click','.forgotPassForm',function(){
        $('#signupform').addClass('d-none');
        $('#loginform').addClass('d-none');
        $('#forgotform').removeClass('d-none');
    });

    $(document).on('click','.login_button',function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type : 'POST',
            url : "{{ route('userarea.authenticate') }}",
            data : $('#loginform').serialize(),
            success:function(response){
                if(response.status==1){
                    window.location.href="{{ route('frontend.order') }}";
                }else{
                    $('.error_message').removeClass('d-none');
                }
            }
        });
    });

    $(document).on('click','.register',function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type : 'POST',
            url : "{{ route('userarea.register') }}",
            data : $('#signupform').serialize(),
            success:function(response){
                console.log(response.status)
                if(response.status==1){
                    window.location.href="{{ route('frontend.order') }}";
                }
                if(response.status==2){
                    $('.reg_error_message').text(response.message);
                }else{
                    $('.reg_error_message').text(response.message);
                }
            }
        });
    });

</script>
