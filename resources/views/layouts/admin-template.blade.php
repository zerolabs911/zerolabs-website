<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}">
  <script src="https://kit.fontawesome.com/1344c70d7a.js" crossorigin="anonymous"></script>
  
  <!-- end plugin css -->

  <!-- common css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- end common css -->

</head>
<body>

  <div class="container-scroller" id="app">
    @include('admin.components.header')
    <div class="container-fluid page-body-wrapper">
      @include('admin.components.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('admin.components.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <!-- end base js -->


  <!-- common js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>
  <script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <!-- end common js -->

</body>
</html>