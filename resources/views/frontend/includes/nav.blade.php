
<header id="header" class=" d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <nav id="navbar" class="navbar">
      <a class="navbar-brand" href="{{ route('frontend.index') }}">
        <img src="{{ asset('frontend/assets/images/logo.png') }}" style="height:50px">
      </a>
        <ul> 
          <li><a class="nav-link scrollto active" href="{{ route('frontend.index') }}">Home</a></li>
          <li><a class="nav-link scrollto @if(Route::currentRouteName()=='frontend.index') {{-- active --}} @endif" href="{{ route('frontend.index') }}#services">Services</a></li>
          <li><a class="nav-link" href="{{ route('frontend.pricing') }}">Pricing</a></li>
          <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}#features">Features</a></li>
          <li><a class="nav-link scrollto" href="{{ route('frontend.index') }}#testimonial">Why Us</a></li>
          <li><a class="nav-link @if(Route::currentRouteName()=='frontend.contactus') {{-- active --}} @endif" href="{{ route('frontend.contactus') }}">Contact Us</a></li>
          <li><a class="nav-link" href="{{ route('frontend.order') }}">Order Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <nav id="buttons" class="btn-nav">
        <ul>
          <!-- <li><a class="btn-livechat" href="javascript:void(Tawk_API.toggle())">Live Chat</a></li> -->
          
          @if (isset(current_user()->id))
          <li><a href="{{ route('userarea.orders.index') }}" class="btn-order" style="margin-left: 4px;" type="button">User Area</a></li>
          <li><a href="{{ route('userarea.logout') }}" class="btn-livechat" style="margin-left: 4px;"
          type="button">Logout</a></li>
          @else
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 4px;"
                        class="btn-livechat gbl_btns" type="button">Log In</a></li>
          <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 4px;"
                        class="btn-order showSignUp" type="button">Register</a></li>
          @endif
        </ul>
      </nav>
      <!-- .navbar -->
    </div>
</header>