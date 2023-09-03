<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DISCUSS - Tempat Dirimu Berdiskusi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="{{asset('/template/plugins/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="/template/plugins/summernote/summernote-bs4.min.css">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/templatelib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/template/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> --}}
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('partials.sidebar')   
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('partials.nav')
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="rounded p-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2 class="mb-0">@yield('header-1')</h2>
                    </div>
                </div>
            </div>

            <!-- Welcome Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4">
                    <div class="d-flex align-items-center justify-content-between pb-2 mb-2 border-bottom border-dark">
                        <h5 class="mb-0">@yield('header-2')</h5>
                    </div>

                    <div class="card-body">
                        @yield('content')
                    </div>

                </div>
            </div>
            <!-- Welcome End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->       
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/template/lib/chart/chart.min.js')}}"></script>
    <script src="{{asset('/template/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('/template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('/template/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/template/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('/template/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('/template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('/template/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('/template/js/main.js')}}"></script>
</body>

</html>