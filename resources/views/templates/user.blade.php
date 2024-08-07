<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dilabs - Creative Digital Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Pegasus - @yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/PEGASUS-W.ico') }}" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/user/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    
    <style>
        /* Gaya untuk item menu utama */
        .navbar-nav > li > a {
            transition: color 0.3s;
        }
        .navbar-nav > li:hover > a,
        .navbar-nav > li > a:focus,
        .navbar-nav > li > a:active {
            color: #2667FF !important;
        }

        /* Gaya untuk item menu dropdown */
        .navbar-nav .dropdown-menu > li > a {
            transition: color 0.3s;
        }
        .navbar-nav .dropdown-menu > li:hover > a,
        .navbar-nav .dropdown-menu > li > a:focus,
        .navbar-nav .dropdown-menu > li > a:active {
            color: #2667FF !important;
        }

        /* Menampilkan dropdown menu */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

    @yield('custom-css')
</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar navbar-common mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed dark no-background">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/user/img/logo.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <img src="{{ asset('assets/user/img/logo.png') }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ Request::is('about-us') ? 'active' : '' }}"><a href="{{ url('/about-us') }}">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="{{ Request::is('product/*') ? 'color: #2667FF; opacity: 1;' : '' }}">Product</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/product/pegacare') }}" style="{{ Request::is('product/pegacare') ? 'color: #2667FF;' : '' }}">Pegacare</a></li>
                            <li><a href="{{ url('/product/goggle-for-education') }}" style="{{ Request::is('product/goggle-for-education') ? 'color: #2667FF;' : '' }}">Goggle For Education</a></li>
                            <li><a href="{{ url('/product/konstruksi') }}" style="{{ Request::is('product/konstruksi') ? 'color: #2667FF;' : '' }}">Konstruksi</a></li>
                            <li><a href="{{ url('/product/industri-perbankan') }}" style="{{ Request::is('product/industri-perbankan') ? 'color: #2667FF;' : '' }}">Industri Perbankan</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('portfolio') ? 'active' : '' }}"><a href="{{ url('/portfolio') }}">Portofolio</a></li>
                    <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
                    <li class="{{ Request::is('contact-us') ? 'active' : '' }}"><a href="{{ url('/contact-us') }}">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div class="attr-right">
                @yield('attr-nav')
                @yield('side-menu')
                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
    </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-item">
                <div class="breadcrum-shape">
                    <img src="{{asset ('assets/user/img/shape/16.png')}}" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a></li>
                                @if (Request::is('blog'))
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                @elseif (Request::is('portfolio'))
                                <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                @elseif (Request::is('product'))
                                <li><a href="{{ url('product') }}">Product</a></li>
                                @elseif (Request::is('product/*'))
                                <li>product</a></li>
                                <li>@yield('title')</li>
                                @elseif (Request::is('blog/*'))
                                <li><a href="{{ url('blog') }}">Blog</a></li>
                                <li>@yield('title')</li>
                                @elseif (Request::is('portfolio/*'))
                                <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                                <li>@yield('title')</li>
                                @else
                                <li>@yield('title')</li>
                                @endif
                            </ol>
                        </nav>
                        <h1 class="mb-3">@yield('title')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Content Section -->
    @yield('content')

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url('{{ asset('assets/user/img/shape/5.png') }}');">
        <div class="container">
            <div class="f-items default-padding-bottom" style="margin-bottom: -5%;">
                <div class="row">
                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">

                        <div class="f-item about pr-50 pr-xs-0 pr-md-0">
                            <img class="logo" src="{{asset ('assets/user/img/logo-footer.png')}}" alt="Logo" style="max-width:100%; height:auto;">
                            <p>
                            Keunggulan kami dalam berbagai proyek mekanikal elektrikal, infrastruktur, dan turut serta mentransformasi dunia pendidikan di Indonesia.
                            </p>
                            <div class="footer-social mt-30">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/about-us">About Us</a>
                                </li>
                                <li>
                                    <a href="/product/pegacare">Product</a>
                                </li>
                                <li>
                                    <a href="/portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="/blog">Blog</a>
                                </li>
                                <li>
                                    <a href="/contact-us">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        Jl. C. Simanjuntak 37, Yogyakarta, Indonesia
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        info@pegasusindonesia.co.id
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        (+62) 274 515555
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item link">
                                <h4 class="widget-title">Our Products</h4>
                                    <ul>
                                        <li>
                                            <a href="/product/pegacare">Pegacare</a>
                                        </li>
                                        <li>
                                            <a href="/product/goggle-for-education">Goggle For Education</a>
                                        </li>
                                        <li>
                                            <a href="/product/konstruksi">Konstruksi</a>
                                        </li>
                                        <li>
                                            <a href="/product/industri-perbankan">Banking Industri</a>
                                        </li>
                                    </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom bg-dark text-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Copyright &copy; 2023 Pegasus Indonesia. All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/user/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/user/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/user/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.scrolla.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/user/js/main.js') }}"></script>

    @stack('user_script')
</body>

</html>