<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assignment</title>
    <link rel="stylesheet" href="{{asset('vendor/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('vendor/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('vendor/images/dashboard/adlift_logo.jfif')}}" />
  </head>
  <body>
    
    <div class="container-scroller">

       @include('layouts.topbar')

      <div class="container-fluid page-body-wrapper">

        @include('layouts.navbar')

        <div class="main-panel">

        @yield('content')

        @include('layouts.footer')

        </div>

      </div>
    </div>

    <script src="{{asset('vendor/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('vendor/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('vendor/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('vendor/js/off-canvas.js')}}"></script>
    <script src="{{asset('vendor/js/misc.js')}}"></script>
    <script src="{{asset('vendor/js/settings.js')}}"></script>
    <script src="{{asset('vendor/js/todolist.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('vendor/js/dashboard.js')}}"></script>
  </body>
</html>