@extends('templates.user')

@section('title', "Konstruksi")

@section('content')
        <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area default-padding">
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-12 pr-45 pr-md-15 pr-xs-15 services-single-content">
                        <div class="service-single-thumb" style="margin-top: -10%;">
                            <img src="{{asset ('assets/user/img/services/1.jpg')}}" alt="Thumb">
                        </div>
                        <h2>@yield('title')</h2>
                        <p>
                        PT. Pegasus Nusantara Jaya Abadi melayani jasa pembuatan desain dan pembangun struktur kabel sistem, data center, 
                        infrastruktur telekomunikasi, audio serta sound system & alarm system, Security System dan sebagainya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->
@endsection
