@extends('templates.user')

@section('title', "Pegacare")



@section('content')
<!-- Star Services Details Area
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">

                <div class="col-xl-12 pr-45 pr-md-15 pr-xs-15 services-single-content">
                    <div class="service-single-thumb" style="margin-top: -10%;">
                        <img src="{{asset ('assets/user/img/services/3.png')}}" alt="Thumb">
                    </div>
                    <h2>Transformasi Dunia Kesehatan</h2>
                    <p>
                        Industri Kesehatan dianggap tertinggal dalam mengadopsi teknologi informasi komputer dibandingkan dengan industri lain. Peris perhatian semua pihak demi kelancaran transformasi kesehatan.
                        PEGACare mentransformasi nilai perawatan kesehatan di masyarakat, personalisasi, dan perawatan.
                        Mengaktifkan model bisnis baru dan manajemen biaya yang efisien, dan berkolaborasi antar profesional medis dan seluruh perusahaan perawatan kesehatan untuk layanan kesehatan yang lebih baik.
                        Transformasi layanan kesehatan adalah salah satu kekuatan pendorong dalam mengelola pengguna dalam hal ini untuk meningkatkan kesehatan, hasil dan mengurangi biaya. Hal ini harus mendapatkan perhatian lebih dalam untuk membuat analisis prediktif dari berbagai sumber data agar benar-benar menimbulkan dampak positif dalam perawatan pasien.
                        Proses transformasi harus mampu menjawab tantangan hari ini dan masa depan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->

<!-- Start Why Choose Us 
    ============================================= -->
<div class="choose-us-style-one-area default-padding overflow-hidden" style="margin-top: -12%;">
    <div class="container">
        <div class="row align-center">

            <div class="col-xl-5">
                <div class="achivement-counter" style="background-image: url('{{ asset('assets/user/img/banner/pegacare-banner.png') }}'); height: 400px; max-width: 100%;">
                    <div class="shape-animated-left-bottom">
                        <img src="{{asset ('assets/user/img/shape/11-1.png')}}" alt="Image Not Found">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 offset-xl-1">
                <div class="choose-us-card">
                    <h4 class="sub-title">Pegacare</h4>
                    <h2 class="title" style="font-size: 30px;">Berpengalaman di Rumah Sakit <br> Pemerintah dan Swasta</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-check">
                                <li>RSIA Permata Purworejo</li>
                                <li>RSJ Provinsi Bali</li>
                                <li>RSUD Campurdarat Tulungagung</li>
                                <li>RSUD Dr. R. Soeprapto Cepu</li>
                                <li>RSU Wijayakusuma Kebumen</li>
                                <li>RSK Puri Nirmala Yogyakarta</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-check">
                                <li>RSUD SIMO Boyolali</li>
                                <li>RS Brayat Minulya - Surakarta</li>
                                <li>RST Slamet Riyadi Surakarta</li>
                                <li>RSUD AJIBARANG - Banyumas</li>
                                <li>RSUD Tidar - Magelang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Why Choose Us -->

<!-- Start Team
    ============================================= -->
<div class="team-style-three-area text-center default-padding-bottom bottom-less" style="background: #F3F3F3;">

    <div class="container-full">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2 class="title">Integrasi Aplikasi</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- sementara justify content center -->
        <div class="row justify-content-center" style="margin-bottom: -7%;">
            <!-- Single Item -->
            <div class="col-xl-2 col-md-6">
                <div class="team-style-three">
                    <div class="thumb">
                        <img src="{{asset ('assets/user/img/icon/17.png')}}" alt="Thumb">
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-2 col-md-6">
                <div class="team-style-three">
                    <div class="thumb">
                        <img src="{{asset ('assets/user/img/icon/18.png')}}" alt="Thumb">
                    </div>
                </div>
            </div>

            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-2 col-md-6">
                <div class="team-style-three">
                    <div class="thumb">
                        <img src="{{asset ('assets/user/img/icon/19.png')}}" alt="Thumb">
                    </div>
                </div>
            </div>

            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-2 col-md-6">
                <div class="team-style-three">
                    <div class="thumb">
                        <img src="{{asset ('assets/user/img/icon/20.png')}}" alt="Thumb">
                    </div>
                </div>
            </div>

            <!-- End Single Item -->

            <!-- Single Item -->
            <div class="col-xl-2 col-md-6">
                <div class="team-style-three">
                    <div class="thumb">
                        <img src="{{asset ('assets/user/img/icon/21.png')}}" alt="Thumb">
                    </div>
                </div>
            </div>

            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Team  -->

<!-- Start Why Choose Us 
    ============================================= -->
<div class="choose-us-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2" style="margin-top: -5%;">
                <div class="site-heading text-center">
                    <h2 class="title">Hak Cipta & PSE Pegacare</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-center  justify-content-center">

            <div class="col-xl-5 mb-3">
                <div class="achivement-counter" style="background-image: url('{{ asset('assets/user/img/banner/hak-cipta-1.png') }}'); height: 400px; max-width: 100%;">
                </div>
            </div>

            <div class="col-xl-5 mb-3">
                <div class="achivement-counter" style="background-image: url('{{ asset('assets/user/img/banner/hak-cipta-2.png') }}'); height: 400px; max-width: 100%;">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- End Why Choose Us -->

@endsection