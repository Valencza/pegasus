@extends('templates.user')

@section('title', "About Us")

@section('attr-nav')
<!-- Start Atribute Navigation -->
<div class="attr-nav flex">
    <ul>
        <li class="contact">
            <div class="call">
            </div>
        </li>
    </ul>
</div>
<!-- End Atribute Navigation -->
@endsection

@section('content')
<!-- Start About
    ============================================= -->
<div class="about-style-two-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-style-two">
                <div class="about-two-thumb">
                    <img src="{{asset('assets/user/img/thumb/9.png')}}" alt="Image Not Found" style="width: 100%; height: auto;">
                    <div class="experience">
                        <h2><strong>9</strong> Years Experience</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-style-two pl-50 pl-md-15 pl-xs-15 mt-60 mt-xs-40">
                <div class="about-two-info">
                    <h2 class="title">PT. Pegasus <br> Nusantara Jaya Abadi</h2>
                    <p>
                        Perusahaan yang bergerak di bidang IT yang berdiri sejak 16 Maret tahun 2015. PT.Pegasus
                        Nusantara Jaya Abadi lebih
                        banyak menangani kebutuhan projek project dan lelang atau tender yang di adakan oleh Pemerintah.
                        Tetapi kami juga
                        melayani penunjukan langsung untuk memenuhi kebutuhan IT di instansi swasta atau pemerintah.
                    </p>
                    <p>
                        Kami melayani kebutuhan IT di masyarakat yang meliputi :
                    </p>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="list-check">
                                <li>Instansi Pemerintahan</li>
                                <li>Perusahaan Swasta Nasional</li>
                                <li>Universitas Negeri dan Swasta</li>
                                <li>Sekolah</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Why Choose Us 
    ============================================= -->
    <div class="choose-us-style-two-area default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="choose-us-style-two">
                        <h2 class="title mb-50">Our <br> Visi Misi</h2>
                        <ul class="check-list-item">
                            <li>
                                <h4>Visi</h4>
                                <p>
                                    PT. Nusantara Jaya Abadi sebagai penyedia layanan dan solusi terbaik dalam bidang komputer dan IT. 
                                    Berkomitmen untuk memberikan service excelence kepada steakholder PT. Nusantara Jaya Abadi
                                </p>
                            </li>
                            <li>
                                <h4>Misi</h4>
                                <p>
                                    Memberikan pelayanan melalui teknologi informasi melalui produk IT dan Komputer.Menyediakan fasilitas yang handal serta solusi 
                                    dan layanan Teknologi Informasi.Untuk mengembangkan sumber daya manusia berkualitas di bidang Teknologi Informasi.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 text-end">
                    <div class="choose-us-style-two-thumb">
                        <div class="curve-text">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" version="1.1">
                                <path id="textPath" d="M 0,75 a 75,75 0 1,1 0,1 z"></path>
                                <text><textPath href="#textPath">Award winning creative digital agency</textPath></text>
                            </svg>
                        </div>
                        <h4>We have worked for you</h4>
                        <h2 class="text-path">since 2015</h2>
                        <img src="assets/user/img/banner/4.png" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us -->

<!-- Start Team
    ============================================= -->
<div class="team-style-two-area default-padding-top pb-70 pb-xs-0" style="background: linear-gradient(135deg, #FFFFFF, #F3F3F3 70%);">

    <div class="container">
        <div class="row align-center">
            <!-- Single Item -->
            <div class="col-xl-6 col-lg-12">
                <div class="site-heading">
                    <h5 class="sub-title">Our Team</h5>
                    <h2 class="title">Our professional <br> expert team members</h2>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInUp">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/1.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>James Baker</strong></h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/2.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>Dalton Grant</strong></h4>
                                <span>Project Manager</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="300ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/3.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>Ryan Ricketts</strong></h4>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="500ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/4.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>James Baker</strong></h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="700ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/5.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>Dalton Grant</strong></h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
             <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="700ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/1.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4 style="color: var(--white)"><strong>Dalton Grant</strong></h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Team -->

<!-- Start Team
    ============================================= -->
<div class="team-style-three-area text-center default-padding-bottom bottom-less">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2 class="title">Our Principal <br> Partnership </h2>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

    <div class="row justify-content-center">
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/28.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/29.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/30.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/31.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/32.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <div class="w-100"></div>
        <!-- Single Item -->
    </div>

    <div class="row justify-content-center">
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/33.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->    
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/34.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/35.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/36.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb" >
                    <img src="assets/user/img/partnership/37.png" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <div class="w-100"></div>
    </div>

    <div class="row justify-content-center">
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb">
                    <img src="assets/user/img/partnership/38.png" class="img-fluid" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb">
                    <img src="assets/user/img/partnership/39.png" class="img-fluid" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb">
                    <img src="assets/user/img/partnership/40.png" class="img-fluid" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb">
                    <img src="assets/user/img/partnership/41.png" class="img-fluid" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-2 col-md-6 mb-30">
            <div class="team-style-three text-center">
                <div class="thumb">
                    <img src="assets/user/img/partnership/42.png" class="img-fluid" alt="Image Not Found">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <div class="w-100"></div>
    </div>
</div>

</div>
<!-- End Team  -->
@endsection
