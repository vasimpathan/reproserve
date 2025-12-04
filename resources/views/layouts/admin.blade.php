
<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>@yield('title') | ReproServe</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta http-equiv="Cache-Control" content="no-store" />
     <link rel="shortcut icon" href="{{ asset('logo-bg.png') }}">

     <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
     <script src="{{ asset('assets/js/config.min.js') }}"></script>
</head>

<body>
@include('components.alerts')

<!-- START Wrapper -->
<div class="wrapper">
  <!-- Optional: top nav -->
  @includeWhen(View::exists('admin.partials.header'), 'admin.partials.header')

  @includeWhen(View::exists('admin.partials.sidebar'), 'admin.partials.sidebar')

  @includeWhen(View::exists('admin.partials.navbar'), 'admin.partials.navbar')

    <div class="page-content">
        <!-- Start Container Fluid -->
        <!-- <div class="container-fluid"> -->
            @yield('content')
        <!-- </div> -->
        <!-- End Container Fluid -->

                <footer class="footer">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-12 text-center">
                               <script>document.write(new Date().getFullYear())</script> &copy; ReproServe. Crafted by <iconify-icon icon="solar:hearts-bold-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                                   href="https://creativecrows.com/" class="fw-bold footer-text" target="_blank">Creativecrows Technologies</a>
                           </div>
                       </div>
                   </div>
                </footer>
                <!-- ========== Footer End ========== -->

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('assets/vendor/jsvectormap/maps/world.js') }}"></script>

    <!-- Dashboard Js -->
    <script src="{{ asset('assets/js/pages/dashboard-analytics.js') }}"></script>
    <!-- Toast alert -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const toastElList = [].slice.call(document.querySelectorAll('.toast'))
            const toastList = toastElList.map(function (toastEl) {
                return new bootstrap.Toast(toastEl).show();
            })
        });
    </script>


</body>

</html>