<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sydhul</title>


    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset("assets/assets/vendors/mdi/css/materialdesignicons.min.css")}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/assets/css/style.css')}}">
    <!-- End layout styles -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/images/logo.png') }}" />
</head>

<body>
    <div class="container-scroller">


        <!-- partial:partials/_sidebar.html -->
        @include('comon.dashboard-menu')
        <!-- partial -->


        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('comon.dashboard-navbar')
            <!-- partial -->
            <div class="main-panel">








                {{-- main content --}}
                @yield('content')







                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            sydhul.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"> Admin
                                templates</a> from sydhul.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    <!-- plugins:js -->
    <script src="{{asset('assets/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>

</html>
