>

<!DOCTYPE html>
<html lang="en">

<head>
@include('userarea.includes.head')
</head>

<body class="">
  <div class="wrapper">
  @include('userarea.includes.nav')
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Essaythrones</a>
          </div>
          
        </div>
      </nav>
      <!-- End Navbar -->
      @yield('content')
     
    </div>
  </div>


@include('userarea.includes.scripts')
</body>

</html>