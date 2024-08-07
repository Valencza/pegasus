@extends('templates.user')

@section('title', "Goggle For Education")

@section('content')
        <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-12 pr-45 pr-md-15 pr-xs-15 services-single-content">
                        <div class="service-single-thumb" style="margin-top: -10%;">
                            <img src="{{asset ('assets/user/img/services/2.png')}}" alt="Thumb">
                        </div>
                        <h2>Tingkatkan kualitas pendidikan dengan Google Workspace for Education yang simpel, fleksibel, dan aman.</h2>
                        <p>
                        Permudah kolaborasi, efektifkan pengajaran, dan jaga agar lingkungan pembelajaran tetap aman dengan Google Workspace for 
                        Education. Gunakan alat kami yang disediakan tanpa biaya, atau tambahkan kemampuan yang ditingkatkan untuk memenuhi kebutuhan institusi Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

    <!-- Start Services 
    ============================================= -->
    <div class="default-padding box-layout overflow-hidden bottom-less services-style-one-area bg-gray bg-cover" style="background-image: url('{{ asset('assets/user/img/shape/edu-banner.png') }}'); margin-top: -5%">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5 class="sub-title">Service we're offering</h5>
                    <h2 class="title">Turn Information <br> Into Actionable Insights</h2>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row" style="margin-top: -5%; margin-bottom: -5%;">
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="services-style-one">
                    <img src="{{ asset('assets/user/img/icon/13.png') }}" alt="Thumb">
                    <h4 class="mb-4"><strong>Tingkatkan kualitas pengajaran di kelas</strong></h4>
                    <p>
                        Manfaatkan alat pembelajaran yang mudah digunakan untuk meningkatkan efektivitas kolaborasi dan komunikasi.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="services-style-one">
                    <img src="{{ asset('assets/user/img/icon/14.png') }}" alt="Thumb">
                    <h4 class="mb-4"><strong>Tingkatkan produktivitas</strong></h4>
                    <p>
                        Hemat waktu dengan membuat dan mengelola tugas, membagi-kan masukan, serta memberikan nilai di satu tempat.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="services-style-one">
                    <img src="{{ asset('assets/user/img/icon/15.png') }}" alt="Thumb">
                    <h4 class="mb-4"><strong>Tingkatkan kualitas tugas siswa</strong></h4>
                    <p>
                        Bantu siswa menyerahkan tugas terbaiknya dengan berbagai alat simpel untuk mendukung pembelajaran.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="services-style-one">
                    <img src="{{ asset('assets/user/img/icon/16.png') }}" alt="Thumb">
                    <h4 class="mb-4"><strong>Lindungi data sekolah</strong></h4>
                    <p>
                        Amankan tugas, identitas, dan privasi semua orang dengan fitur dan kontrol keamanan yang proaktif.
                    </p>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
    <!-- End Services -->

    <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">
                    <div class="faq-style-one service-faq" style="margin-top: -5%;">
                            <h2 class="mb-30">Apa Saja Layanan Google Workspace EDU?</h2>
                            <div class="accordion mt--20" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Classroom
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                            Google Classroom adalah tempat lengkap untuk kegiatan belajar mengajar Anda. Alat kami yang aman dan mudah digunakan membantu pengajar mengelola, mengukur, dan memperkaya pengalaman belajar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Docs
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                            Buat dan berkolaborasi pada dokumen online secara real time dan dari perangkat apa pun. Fitur asistif seperti Smart Compose membantu Anda menulis secara lebih cepat dengan lebih sedikit kesalahan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Gmail
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                            Email yang aman, cerdas, dan mudah digunakan. Tingkatkan produktivitas dengan Gmail. 
                                            Kini terintegrasi dengan Google Chat, Google Meet, dan banyak lagi, semuanya di satu tempat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Drive
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                            Simpan, bagikan, dan bersama-sama mengerjakan file dan folder dari perangkat seluler, tablet, atau komputer Anda. 
                                            Terintegrasi dengan Dokumen, Spreadsheet, dan Slide, aplikasi kolaborasi berbasis cloud yang memungkinkan tim Anda membuat konten dan berkolaborasi secara lebih efektif secara real time.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Google Meet
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p>
                                            Hubungkan komunitas sekolah Anda menggunakan video untuk kepentingan kelas, konferensi orang tua dan pengajar, pengembangan profesional, dan lainnya.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
