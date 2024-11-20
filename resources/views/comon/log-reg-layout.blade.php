<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sydhul</title>


    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/assets/css/style.css') }}">
    <!-- End layout styles -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/logo.png') }}" />
</head>



<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">








                            @yield('content')










                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->



    <!-- plugins:js -->
    <script src="{{ asset('assets/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/assets/js/misc.js') }}"></script>
    <script src="{{ asset('assets/assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->

</body>

</html>
