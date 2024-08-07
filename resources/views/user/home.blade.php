<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dilabs - Creative Digital Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Pegasus</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/PEGASUS-W.ico') }}" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/user/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/user/css/themify-icons.css" rel="stylesheet">
    <link href="assets/user/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/user/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/user/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/user/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/user/css/animate.css" rel="stylesheet">
    <link href="assets/user/css/validnavs.css" rel="stylesheet">
    <link href="assets/user/css/helper.css" rel="stylesheet">
    <link href="assets/user/css/unit-test.css" rel="stylesheet">
    <link href="assets/user/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <style>
        /* Gaya untuk item menu utama */
        .navbar-nav>li>a {
            transition: color 0.3s;
        }

        .navbar-nav>li:hover>a,
        .navbar-nav>li>a:focus,
        .navbar-nav>li>a:active {
            color: #2667FF !important;
        }

        /* Gaya untuk item menu dropdown */
        .navbar-nav .dropdown-menu>li>a {
            transition: color 0.3s;
        }

        .navbar-nav .dropdown-menu>li:hover>a,
        .navbar-nav .dropdown-menu>li>a:focus,
        .navbar-nav .dropdown-menu>li>a:active {
            color: #2667FF !important;
        }

        /* Menampilkan dropdown menu */
        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->


    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area top-bar-style-two text-light" style="background: #A51428;">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8">
                    <ul class="item-flex">
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info">
                                <strong>Address</strong>
                                Jl. C. Simanjuntak 37, Yogyakarta, Indonesia
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-user-headset"></i>
                            </div>
                            <div class="info">
                                <strong>Phone</strong>
                                (+62) 274 515555
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-end">
                    <div class="call-entry">
                        <div class="icon">
                            <i class="fas fa-comments-alt-dollar"></i>
                        </div>
                        <div class="info">
                            <p>Have any Questions?</p>
                            <h5>info@pegasusindonesia.co.id</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-default validnavs dark">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <form action="#">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{asset ('assets/user/img/logo.png')}}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="assets/user/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="/">Home</a>
                        </li>

                        <li class="">
                            <a href="/about-us">About Us</a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/product/pegacare') }}">Pegacare</a></li>
                                <li><a href="{{ url('/product/goggle-for-education') }}">Goggle For Education</a></li>
                                <li><a href="{{ url('/product/konstruksi') }}">Konstruksi</a></li>
                                <li><a href="{{ url('/product/industri-perbankan') }}">Industri Perbankan</a></li>
                            </ul>
                        </li>

                        <li class="">
                            <a href="/portfolio">Portofolio</a>
                        </li>

                        <li class="">
                            <a href="/blog">Blog</a>
                        </li>
                        <li><a href="/contact-us">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav flex">
                        <ul>
                            <li class="side-menu">
                                <a href="#">
                                    <span class="bar-1"></span>
                                    <span class="bar-2"></span>
                                    <span class="bar-3"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="icon_close"></i></a>
                        <div class="widget">
                            <div class="logo">
                                <img src="{{asset ('assets/user/img/logo-footer.png')}}" alt="Logo">
                            </div>
                        </div>
                        <div class="widget address">
                            <div>
                                <ul>
                                    <li>
                                        <div class="content">
                                            <p>Address</p>
                                            <strong>Jl. C. Simanjuntak 37, Yogyakarta, Indonesia</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Email</p>
                                            <strong>info@pegasusindonesia.co.id</strong>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="content">
                                            <p>Contact</p>
                                            <strong>(+62) 274 515555</strong>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget newsletter">
                            <h4 class="title">Get Subscribed!</h4>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="arrow_right"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <div class="widget social">
                            <ul class="link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- End Side Menu -->

                </div>
                <!-- Main Nav -->

            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area bg-gray navigation-circle banner-style-four-area zoom-effect overflow-hidden text-light">
        <!-- Slider main container -->
        <div class="banner-style-one-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-four">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/user/img/banner/8.png);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="content">
                                    <h2>PT. Pegasus Nusantara Jaya Abadi</h2>
                                    <p>
                                        Menyediakan berbagai layanan konsultasi di bidang Teknologi Informasi. Berbagai instansi mempercayakan
                                        pengadaan produk IT-nya kepada kami.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-whatsapp btn-md animation" href="https://wa.me/6281234567890" target="_blank">
                                            Hubungi Kami di WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-four-shape">
                        <img src="assets/user/img/shape/banner-shape.png" alt="Image Not Found">
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-four">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(assets/user/img/banner/6.png);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-6 col-lg-7 col-md-10">
                                <div class="content">
                                    <h2>PT. Pegasus Nusantara Jaya Abadi</h2>
                                    <p>
                                        PT. Pegasus Nusantara Jaya Abadi lebih banyak menangani kebutuhan project dan lelang atau tender yang di adakan oleh Pemerintah.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-whatsapp btn-md animation" href="https://wa.me/6281234567890" target="_blank">
                                            Hubungi Kami di WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-four-shape">
                        <img src="assets/user/img/shape/banner-shape.png" alt="Image Not Found">
                    </div>
                </div>
                <!-- End Single Item -->

            </div>

            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
    <!-- End Main -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-three-area default-padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-style-three">
                    <div class="about-three-thumb">
                        <img src="assets/user/img/thumb/6-1.png" alt="Image Not Found">
                        <img src="assets/user/img/thumb/5-1.png" alt="Image Not Found">
                        <div class="experience">
                            <h2><strong>9</strong> Years Experience</h2>
                        </div>
                        <div class="animated-shape">
                            <img src="assets/user/img/shape/38.png" alt="Shape">
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1 about-style-three">
                    <div class="about-three-info">
                        <h4 class="sub-title">WELCOME TO PEGASUS</h4>
                        <h2 class="title">PT. Pegasus Nusantara Jaya Abadi</h2>
                        <p>
                            Perusahaan kami bergerak di bidang Pengadaan Barang atau Jasa dan Konsultan IT yang berdiri pada 16 Maret 2015 oleh
                            para praktisi yang berpengalaman di bidangnya. PT. Pegasus Nusantara Jaya Abadi adalah salah satu perusahaan dari
                            PT. Harrisma Buwana Jaya group.
                        </p>
                        <ul class="list-grid-four">
                            <li>Sertifikasi Google Cloud Partner</li>
                            <li>Smart class and Smart Office</li>
                            <li>Pengadaan Hardware</li>
                            <li>IT Software Solution</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="services-style-two-area bg-dark default-padding bottom-less">
        <div class="container">
            <div class="row service-items-container">
                <div class="col-xl-6 mb-30 d-flex">
                    <div class="service-style-two-heading bg-theme bg-cover text-light flex-fill d-flex flex-column" style="background-image: url(assets/user/img/shape/banner-3.png);">
                        <h5 class="sub-title">Our Services</h5>
                        <h2 class="title">Ruang Lingkup Kerja</h2>
                        <div class="button-border-length mt-35">
                            <a href="services.html" class="btn-arrow-length">See All</a>
                        </div>
                    </div>
                </div>
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30 d-flex">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/structured-cable-system.png" alt="Image Not Found">
                        </div>
                        <p>Desain dan Pembangunan Sistem Struktur Kabel</p>
                        <h4><strong>Structured Cable System</strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/data-center-infrastructure.png" alt="Image Not Found">
                        </div>
                        <p>
                            Pembangunan Infrastruktur Data Center
                        </p>
                        <h4><strong>Data Center Infrastructure </strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/unfied-communication-system.png" alt="Image Not Found">
                        </div>
                        <p>
                            Desain dan Pembangunan Infrastruktur Telekomunikasi PABX, IP PBX, Sistem Kom...
                        </p>
                        <h4><strong>Unified Communication System</strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/visual-multimedia.png" alt="Image Not Found">
                        </div>
                        <p>
                            Rancang Bangun Audio Visual Multimedia Conference System
                        </p>
                        <h4><strong>Visual Multimedia Conference System</strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/it-development.png" alt="Image Not Found">
                        </div>
                        <p>
                            Develop IT Software dan Pengadaan Hardware Terkait
                        </p>
                        <h4><strong>IT Development & Procurement Service</strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Start Single Item -->
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="service-style-two">
                        <div class="icon">
                            <img src="assets/user/img/icon/security-system.png" alt="Image Not Found">
                        </div>
                        <p>
                            Desain & Implementasi Security System, Gate Imaging Scanner, dll
                        </p>
                        <h4><strong>Security System Implementation</strong></h4>
                        <div class="shape">
                            <img src="assets/user/img/shape/15.png" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Start Case Studies
    ============================================= -->
    <div class="case-studies-area default-padding" style="background-image: url(assets/user/img/shape/30.png);">
        <div class="container">
            <div class="case-carousel swiper">
                <div class="heading-left">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="content-left">
                                <h5 class="sub-title">portfolio</h5>
                                <h2 class="heading">Completed Projects</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Single item -->
                    @foreach($portfolios as $portfolio)
                    <div class="swiper-slide">
                        <div class="case-style-two">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="case-thumb">
                                        <img src="{{asset('storage/portfolio/gambar/' . $portfolio->gambar)}}" alt="Image Not Found" style="height: 650px; width: auto; object-fit: cover; aspect-ratio: 3 / 2;">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="info text-light" style="background-image: url(assets/user/img/shape/banner-3.png);">
                                        <h2>{{ $portfolio->nama }}</h2>
                                        <p>
                                            {!! $portfolio->deskripsi !!}
                                        </p>
                                        {{-- <a class="btn btn-md btn-dark animation" href="{{ route('portfolio.show', $portfolio->id) }}">Lihat Lebih Banyak</a> --}}
                                        <a class="btn btn-md btn-dark animation" href="{{ route('portfolio') }}">Lihat Lebih Banyak</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End Single item -->

                </div>

                <!-- Navigation -->
                <div class="case-swiper-nav">
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Case Studies -->

    <!-- Start Team
    ============================================= -->
    <div class="team-style-three-area text-center default-padding-bottom bottom-less" style="background: #F3F3F3;">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2" style="margin-top: 2em;">
                    <div class="site-heading text-center">
                        <h2 class="title">Why You Should <br> Choose Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-three">
                        <div class="thumb">
                            <img src="assets/user/img/iso/iso1.png" alt="Image Not Found">
                        </div>
                        <div class="content">
                            <h4><strong>Quality Management</strong></h4>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-three">
                        <div class="thumb">
                            <img src="assets/user/img/iso/iso2.png" alt="Image Not Found">
                        </div>
                        <div class="content">
                            <h4><strong>Occupational Health and Safety Management</strong></h4>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-three">
                        <div class="thumb">
                            <img src="assets/user/img/iso/iso3.png" alt="Image Not Found">
                        </div>
                        <div class="content">
                            <h4><strong>Environmental Management</strong></h4>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="team-style-three">
                        <div class="thumb">
                            <img src="assets/user/img/iso/iso4.png" alt="Image Not Found">
                        </div>
                        <div class="content">
                            <h4><strong>Information Security Management System</strong></h4>
                        </div>
                    </div>
                </div>

                <!-- End Single Item -->
            </div>
            <div class="button">
                <a class="btn btn-theme btn-md animation" href="{{url('/detail-iso')}}">Lihat Lebih Banyak</a>
            </div>
        </div>
    </div>
    <!-- End Team  -->

    <!-- Start Brand Area 
    ============================================= -->
    <div class="brand-area relative overflow-hidden bg-fixed" style="background-image: url(assets/img/banner/5.jpg);">
        <div class="video-bg-live">
            <img src="assets/user/img/banner/3.png" alt="Image Not Found" style="width: auto; height: 100%;">
        </div>
        <div class="shadow dark-hard"></div>
        <div class="brand-style-one-info text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Our Principal <br> Partnership</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-style-one bg-gradient text-light">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-carousel">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/user/img/brand/goggle.png" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/user/img/brand/intel.png" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/user/img/brand/cisco.png" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <img src="assets/user/img/brand/apple.png" alt="Image Not Found">
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradn Area -->

    <!-- Start Testimonials
    ============================================= -->
    <!-- <div class="testimonail-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="testimonial-style-one-thumb">
                        <h2 class="text-large">Testimonial</h2>
                        <img src="assets/user/img/illustration/1.png" alt="Image Not Found">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 pt-200 pt-md-50 pt-xs-40">
                    <div class="testimonial-style-one-carousel swiper"> -->
    <!-- Additional required wrapper -->
    <!-- <div class="swiper-wrapper"> -->
    <!-- Single item -->
    <!-- <div class="swiper-slide">
                                <div class="testimonial-style-one">

                                    <div class="item">

                                        <div class="content">
                                            <p>
                                                “Pargeting consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="assets/user/img/team/9.jpg" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <h4>Matthew J. Wyman</h4>
                                                <span>Senior Consultant</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End Single item -->
    <!-- Single item -->
    <!-- <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="item">

                                        <div class="content">
                                            <p>
                                                “Consultation discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="assets/user/img/team/10.jpg" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <h4>Anthom Bu Spar</h4>
                                                <span>Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End Single item -->
    <!-- Single item -->
    <!-- <div class="swiper-slide">
                                <div class="testimonial-style-one">
                                    <div class="item">

                                        <div class="content">
                                            <p>
                                                “Business discover apartments. ndulgence off under folly death wrote cause her way spite. Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but why she shewing. She sang know now always remembering to the point.”
                                            </p>
                                        </div>
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="assets/user/img/team/11.jpg" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <h4>Metho k. Partho</h4>
                                                <span>Senior Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End Single item -->
    <!-- </div> -->

    <!-- If we need pagination -->
    <div class="testimonial-style-one-pagination">
        <div class="swiper-pagination"></div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Why Choose Us
    ============================================= -->
    <!-- <div class="choose-us-style-three-area default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="video-thumb mb-30">
                        <img src="assets/user/img/thumb/7.jpg" alt="Image Not Found">
                    </div>
                    <ul class="list-info-item">
                        <li>
                            <h4><a href="services-details.html">Digital Solution <i class="fas fa-angle-right"></i></a></h4>
                        </li>
                        <li>
                            <h4><a href="services-details.html">Strategy <i class="fas fa-angle-right"></i></a></h4>
                        </li>
                        <li>
                            <h4><a href="services-details.html">Branding <i class="fas fa-angle-right"></i></a></h4>
                        </li>
                    </ul>
                </div> -->

    <!-- <div class="col-lg-6 offset-lg-1 mt-md-50 mt-xs-50">
                    <div class="choose-us-syle-three">
                        <h4 class="sub-title">Our Value</h4>
                        <h2 class="title">We Assist our clients in achieving their business </h2>
                        <div class="skill-items mt-40"> -->
    <!-- Progress Bar Start -->
    <!-- <div class="progress-box">
                                <h5>Business Idea</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="88">
                                         <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Soluttion service</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="67">
                                        <span>67%</span>
                                    </div>
                                </div>
                            </div> -->
    <!-- End Progressbar -->
    <!-- </div>
                    </div>
                </div> -->

    </div>
    </div>
    </div>
    <!-- End Why Choose us  -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area overflow-hidden default-padding" style="background-image: url(assets/user/img/shape/map.png);">
        <div class="shape-right-bottom">
            <img src="assets/user/img/shape/18.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-center">
                <div class="col-tact-stye-one col-lg-5">
                    <div class="contact-style-one-info">
                        <div class="mb-40">
                            <h2>Contact Information</h2>
                            <p>
                                Plan upon yet way get cold spot its week. <br> Almost do am or limits hearts. Resolve parties.
                            </p>
                        </div>
                        <ul class="contact-address">
                            <li class="wow fadeInUp">
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <a href="#">(+62) 274 515555</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="info">
                                    <h4 class="title">Location</h4>
                                    <p>
                                        Jl. C. Simanjuntak 37, Yogyakarta, Indonesia
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="info">
                                    <h4 class="title">Official Email</h4>
                                    <a href="mailto:info@pegasusindonesia.co.id">info@pegasusindonesia.co.id</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="700ms">
                                <div class="info">
                                    <h4 class="title">Follow Us</h4>
                                    <ul class="social-link">
                                        <li>
                                            <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="pinterest" href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-tact-stye-one col-lg-6 offset-lg-1">
                    <div class="contact-form-style-one">
                        <h4 class="sub-title">Let’s talk</h4>
                        <h2 class="title">Send us a Massage</h2>
                        <form action="#" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <a href="https://wa.me/6281234567890" class="btn2 btn-whatsapp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                        Let’s talk
                                    </a>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Blog
    ============================================= -->
    <!-- <div class="blog-area home-blog default-padding bg-gray bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">News & Events</h5>
                        <h2 class="title">Check out our blog posts </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row"> -->
    <!-- Single Item -->
    <!-- <div class="col-xl-4 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="relative">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/1.jpg" alt="Image Not Found"></a>
                            </div>
                            <div class="tags">
                                <a href="#">Marketing</a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly commanded if.</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!-- End Single Item -->
    <!-- Single Item -->
    <!-- <div class="col-xl-4 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="relative">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/2.jpg" alt="Image Not Found"></a>
                            </div>
                            <div class="tags">
                                <a href="#">Agency</a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Expression acceptance imprudence particular</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!-- End Single Item -->
    <!-- Single Item -->
    <!-- <div class="col-xl-4 col-md-6 mb-30">
                    <div class="blog-style-one">
                        <div class="relative">
                            <div class="thumb">
                                <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/3.jpg" alt="Image Not Found"></a>
                            </div>
                            <div class="tags">
                                <a href="#">Business</a>
                            </div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Considered imprudence of technical friendship.</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div> -->
    <!-- End Single Item -->
    <!-- </div>
        </div>
    </div> -->
    <!-- End Blog -->


    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url(assets/user/img/shape/5.png);">

        <div class="container">
            <div class="f-items default-padding-bottom" style="margin-bottom: -5%;">
                <div class="row">
                    <!-- Singel Item -->
                    <div class="col-lg-3 col-md-6 footer-item mt-50">
                        <div class="f-item about pr-50">
                            <img class="logo" src="{{asset ('assets/user/img/logo-footer.png')}}" alt="Logo">
                            <p>
                                Keunggulan kami dalam berbagai proyek mekanikal elektrikal, infrastruktur, dan turut serta mentransformasi dunia pendidikan di Indonesia. </p>
                            <div class="footer-social mt-30">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Singel Item -->

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

                    <!-- Singel Item -->
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
                    <!-- End Singel Item -->

                    <!-- Singel Item -->
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
                                    <a href="/product/industri-perbankan">Industri Perbankan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Singel Item -->
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

</body>

<!-- Mirrored from validthemes.net/site-template/dilabs/business.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 05:56:05 GMT -->

</html>