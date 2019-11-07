<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield("title") - Digitaloka </title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('stisla/assets/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('stisla/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('stisla/assets/css/components.css')}}">

<body>
  <div id="app">
      @yield('content')
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('stisla/assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/popper.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('stisla/assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('stisla/assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{asset('stisla/assets/js/scripts.js')}}"></script>
  <script src="{{asset('stisla/assets/js/custom.js')}}"></script>
</body>
</html>
