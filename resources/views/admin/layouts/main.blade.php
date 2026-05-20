<!DOCTYPE html>
<!-- beautify ignore:start -->
<html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class="light-style layout-menu-fixed"
  dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') {{ config('app.name', 'Laravel') }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/img/favicon/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    @include('admin.layouts.header-script')

  </head>

  <body>
   <!-- Layout wrapper -->
   <div class="buy-now">
    <a href="{{ route('index') }}" target="_blank" title="Go to Home" class="btn btn-success btn-sm btn-buy-now pb-2"> <i class="tf-icons bx bx-home-circle"></i> </a>
  </div>
   <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      
        @include('admin.layouts.sidebar-menu')

      <!-- Layout container -->
      <div class="layout-page">
        
        @include('admin.layouts.header')

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          @yield('bodyContent')
         
          <!-- / Content -->

          @include('admin.layouts.footer')

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  @include('admin.layouts.footer-script')


  </body>
</html>
