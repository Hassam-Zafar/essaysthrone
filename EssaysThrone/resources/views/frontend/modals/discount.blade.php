<style>

:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

.popup-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0; }
        .modal-dialog {
          max-width: 600px; }
        
        .popup-content {
          overflow: hidden;
          border: none;
          position: relative;
          padding: 0 !important;
          -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
          -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
          box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24); }
          .popup-content .modal-header {
            position: relative;
            padding: 0;
            border: none;
            height: 230px;
            background: #915eff;
            background: -moz-linear-gradient(45deg, #915eff 0%, #ff8e59 100%);
            background: -webkit-gradient(left bottom, right top, color-stop(0%, #915eff), color-stop(100%, #ff8e59));
            background: -webkit-linear-gradient(45deg, #915eff 0%, #ff8e59 100%);
            background: -o-linear-gradient(45deg, #915eff 0%, #ff8e59 100%);
            background: -ms-linear-gradient(45deg, #915eff 0%, #ff8e59 100%);
            background: linear-gradient(45deg, #FECE14 0%, #c09b0d 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#915eff', endColorstr='#ff8e59', GradientType=1 ); }

          .popup-content .modal-body {
            border: none;
            overflow: hidden;
            margin-top: -180px;
            z-index: 2; }
            .popup-content .modal-body .icon {
              width: 200px;
              height: 200px;
              border-radius: 50%;
              font-size: 30px;
              margin: 0 auto;
              margin-bottom: 10px; }
            .popup-content .modal-body h2 {
              font-weight: 700;
              color: #fff; }
            .popup-content .modal-body h4 {
              font-size: 18px; }
            .popup-content .modal-body h3 {
              font-weight: 800;
              font-size: 22px; }
              .popup-content .modal-body h3 span {
                font-weight: 300; }
        .btn-availoff{
          width: 40%;
          padding: 10px 0px;
          color: #fff;
          background-color: #FECE14;
          border: none;
          border-radius: 20px;
        }
        .popup-degree-bg {
          position: relative; }
          .popup-degree-bg:after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -30px;
            overflow: visible;
            width: 50%;
            height: 60px;
            z-index: 1;
            -webkit-transform: skewY(-10deg);
            -moz-transform: skewY(-10deg);
            -ms-transform: skewY(-10deg);
            -o-transform: skewY(-10deg);
            transform: skewY(-10deg);
            background-color: #fff; }
          .popup-degree-bg:before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -30px;
            overflow: visible;
            width: 50%;
            height: 60px;
            z-index: 1;
            -webkit-transform: skewY(10deg);
            -moz-transform: skewY(10deg);
            -ms-transform: skewY(10deg);
            -o-transform: skewY(10deg);
            transform: skewY(10deg);
            background-color: #fff; }
        .modal-header .close {
          padding: 1rem 1rem;
          margin: -1rem -1rem -1rem auto;
          margin-right: 0px !important;
        }
</style>

  <div class="modal fade" id="discount-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true" style="border-radius:7px;">
        <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="popup-content">
				<div class="modal-header popup-degree-bg">
					<button type="button" class="close d-flex align-items-center justify-content-center"
						data-dismiss="modal" aria-label="Close" id="closesize">
						<span aria-hidden="true" class="ion-ios-close"></span>
					</button>
				</div>
				<div class="modal-body pt-md-0 pb-md-5 text-center">
					<h2>You've Got Mail!</h2>
					<div class="icon d-flex align-items-center justify-content-center">
						<img src="{{ asset('frontend/discount-modal/images/email.svg') }}" alt="" class="img-fluid">
					</div>
					<h3 class="mb-2">Hold On… Save BIG With <strong>50%</strong> DISCOUNT</h3>
					<p>Take Advantage of our Best Offer Ever. Our Expert Team of Writers Awaits to help you Ace your
						Grades.</p>
					<button class="btn-availoff">Avail Offer</button>
				</div>
			</div>
		</div>
  </div>


<script>

/***** CALCULATE THE TIME REMAINING *****/
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    
    /***** CONVERT THE TIME TO A USEABLE FORMAT *****/
    var seconds = Math.floor( (t / 1000) % 60 );
    var minutes = Math.floor( (t / 1000 / 60) % 60 );
    var hours = Math.floor( (t / (1000 * 60 * 60)) %  24);
    var days = Math.floor( t / (1000 * 60 * 60 * 24) );
    
    /***** OUTPUT THE CLOCK DATA AS A REUSABLE OBJECT *****/
    return {
        'total': t,
        // 'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
}

/***** DISPLAY THE CLOCK AND STOP IT WHEN IT REACHES ZERO *****/
function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    // var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
    
    function updateClock() {
        var t = getTimeRemaining(endtime);
        
        // daysSpan.innerHTML = 1;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

updateClock(); // run function once at first to avoid delay
var timeinterval = setInterval(updateClock,1000);
}

/***** SET A VALID END DATE *****/
var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>