@extends('frontend.layouts.app')

@section('page_main_heading')
{{ $page_heading ?? "" }}
@endsection

@push('custom-styles')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">


 
  .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column; 
      padding-top: 50px;
      width: 100%;
      min-height: 100%;
      padding-top:10%;
      padding-bottom:10%;
  }

  #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      background: #fff;
      padding: 30px;
      width: 90%;
      max-width: 450px;
      position: relative;
      padding: 0px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      text-align: center;
  }

  #formFooter {
      background-color: #f6f6f6;
      border-top: 1px solid #dce8f1;
      padding: 25px;
      text-align: center;
      -webkit-border-radius: 0 0 10px 10px;
      border-radius: 0 0 10px 10px;
  }



  input[type=button], input[type=submit], input[type=reset]  {
      background-color: #fece14;
      border: none;
      color: white;
      padding: 15px 80px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
      box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      margin: 5px 20px 40px 20px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
  }

  input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
      background-color: #fece14;
  }

  input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
  }

  input[type=text], input[type=email], input[type=password] {
      /*background-color: #fece14;*/
      border: none;
      color: #0d0d0d;
      padding: 8px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #fece14;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
  }

  input[type=text]:placeholder {
      color: #fece14;
  }



  /* ANIMATIONS */

  /* Simple CSS3 Fade-in-down Animation */
  .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
  }

  @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

.login_heading{
    padding-top: 10px;
    color: #fece14;
}
</style>
@endpush

@section('content')

<div class="wrapper ">
  <div id="formContent">
    @include('admin.includes.message')
    <div class="fadeIn first login_heading">
      <h3>User Login</h3>
  </div>
  <form class="form-horizontal form-material" id="loginform" action="{{ route('userarea.authenticate') }}" method="post">
    @csrf
    <input class="fadeIn" type="email" name="email" required placeholder="Email">
    <input class="fadeIn third" type="password" name="password" required placeholder="Password">
    <input type="submit" class="fadeIn fourth" value="Log In">
</form>

{{-- <div id="formFooter">
  <a class="underlineHover" href="#">Forgot Password?</a>
</div> --}}

</div>
</div>

@endsection