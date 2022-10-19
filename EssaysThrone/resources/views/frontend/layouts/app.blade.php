<!DOCTYPE html>
<html lang="en">

<head>
  @include('frontend.includes.head')
  @stack('custom-styles')
<style>
      .float-right-whatsapp{
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 5%;
    left: 1.6%;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    /* box-shadow: 2px 2px 3px #999; */
    z-index: 100;
}

.my-float{
	margin-top:16px;
}
.bounce {
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%,
    25%,
    50%,
    75%,
    100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-20px);
    }
    60% {
        transform: translateY(-12px);
    }
}
.contact-us-footer>a{
    color:#fff;
}
.contact-us-footer{
    list-style:none;
}
</style>
</head>

<body>
  {{-- 
  <div class="top_bar">
    <div class="container">
      <ul class="cnts_dtl">
        <li>
          <a href="javascript:;" class="btn btn-primary">
            <i class="fas fa-phone-alt"></i>
            {{ isset($phone) ? $phone->value : '021-861-654-222' }}
          </a>
        </li>
        <li>
          <a href="javascript" class="btn btn-primary">
            <i class="fas fa-envelope"></i>
            {{ isset($email) ? $email->value : 'info@papersnerd.com' }}
          </a>
        </li>
      </ul>
    </div>
  </div> --}}
  <header @if(in_array(Route::currentRouteName(),['frontend.index','frontend.services','frontend.essay_writing','frontend.assignments','frontend.research_papers','frontend.thesis','frontend.article_reviews'])) @else class="small-header" @endif>
    @include('frontend.includes.header')
  </header>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57ZDC6N"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  @yield('content')
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float-right-whatsapp bounce" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a> -->
  <footer>
    @include('frontend.includes.footer')
  </footer>
  @include('frontend.modals.login')
  @include('frontend.modals.discount')
  @include('frontend.includes.scripts')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+447520665751&text=Say%21%20Hello%20." class="float-right-whatsapp" target="_blank">
  <i class="fa fa-whatsapp my-float"></i>
  </a>
  @stack('custom-scripts')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5db1fa7678ab74187a5b670c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>
