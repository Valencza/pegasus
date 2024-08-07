@extends('templates.user')

@section('title', "Industri Perbankan")



@section('content')
<!-- Star Services Details Area
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">

                <div class="col-xl-12 pr-45 pr-md-15 pr-xs-15 services-single-content" style="margin-bottom: -20%">
                    <div class="service-single-thumb" style="margin-top: -10%;">
                        <img src="{{asset ('assets/user/img/banner/industri-perbankan.png')}}" alt="Thumb">
                    </div>
                    <h2>Selamat datang di Pegasus, penyedia solusi Fraud Detection System (FDS) terkemuka untuk industri perbankan.</h2>
                    <p>
                    Kami berdedikasi untuk melindungi institusi keuangan dari berbagai ancaman penipuan melalui teknologi canggih dan 
                    inovasi terus-menerus yang efisien diimplementasikan pada Bank.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->

<!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding" style="margin-bottom: -5%;">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    
                    <div class="col-xl-12 col-lg-7services-single-content">
                        <div class="features mt-40 mt-xs-30 mb-30 mb-xs-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="content">
                                        <h3>Visi</h3>
                                        <p>
                                        Visi kami adalah menjadi pemimpin global dalam penyediaan teknologi keamanan keuangan yang handal dan dapat diandalkan, dengan fokus pada pencegahan penipuan serta indikasi fraud dan peningkatan keamanan transaksi keuangan di industri perbankan.                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="content">
                                        <h3>Misi</h3>
                                        <p>
                                        Misi kami adalah untuk menyediakan solusi deteksi dan pencegahan penipuan yang efisien dan efektif. Sehingga memungkinkan bank dan lembaga keuangan lainnya untuk beroperasi dengan lebih aman, meningkatkan kepercayaan nasabah, dan menjaga integritas sistem keuangan.                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2>Fraud Detection System</h2>
                        <p class="mt-4">
                            Sistem deteksi penipuan kami menggunakan teknologi Rule Based Scenario dan Machine Learning untuk mengidentifikasi serta menganalisis pola transaksi mencurigakan secara real-time. Dengan memanfaatkan algoritma canggih, sistem kami mampu mendeteksi penipuan dengan akurasi tinggi dan meminimalkan risiko kerugian finansial untuk pelaku industri perbankan.
                        </p>
                        <h2>Fitur Utama</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-check" style="margin-top: 1%;">
                                    <li>Real-Time Monitoring: Memantau transaksi secara langsung untuk mendeteksi aktivitas mencurigakan secepat mungkin.</li>
                                    <li>Advanced Analytics: Menggunakan analitik data yang kuat untuk mengidentifikasi pola dan tren penipuan.</li>
                                    <li>Automated Alerts: Memberikan peringatan otomatis kepada tim keamanan ketika terdeteksi adanya aktivitas yang mencurigakan.</li>
                                    <li>Comprehensive Reporting: Menyediakan laporan mendetail untuk membantu analisis dan pengambilan keputusan divisi Satuan Anti Fraud.</li>
                                    <li>User-Friendly Interface: Antarmuka yang mudah digunakan untuk memudahkan pengelolaan dan pemantauan sistem.</li>
                                </ul>
                            </div>
                        </div>
                        <h2 class="mt-4">Why Choose Us</h2>
                        <p class="mt-4">
                            Kami memahami betapa pentingnya keamanan dalam industri perbankan. Dengan solusi Fraud Detection System kami, anda dapat mengandalkan teknologi otomatisasi indikasi fraud untuk melindungi institusi keuangan dan perbankan dari berbagai ancaman penipuan. Kami berkomitmen untuk memberikan perlindungan terbaik bagi aset keuangan perbankan.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

    <!-- Start Team
    ============================================= -->
<div class="team-style-three-area text-center default-padding-bottom bottom-less" style="background: #F3F3F3;">

<div class="container-full">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
                <h2 class="title">Our Banking Client</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- sementara justify content center -->
    <div class="row justify-content-center" style="margin-bottom: -5%;">
        <!-- Single Item -->
        <div class="col-xl-4 col-md-6">
            <div class="team-style-three">
                <div class="thumb">
                    <img src="{{asset ('assets/user/img/brand/bank-mestika.png')}}" alt="Thumb">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-4 col-md-6">
            <div class="team-style-three">
                <div class="thumb">
                    <img src="{{asset ('assets/user/img/brand/bank-kalbar.png')}}" alt="Thumb">
                </div>
            </div>
        </div>

        <!-- End Single Item -->
        <!-- Single Item -->
        <div class="col-xl-4 col-md-6">
            <div class="team-style-three">
                <div class="thumb">
                    <img src="{{asset ('assets/user/img/brand/bank-sumsel-babel.png')}}" alt="Thumb">
                </div>
            </div>
        </div>
        <!-- End Single Item -->
    </div>
</div>
</div>
<!-- End Team  -->

@endsection