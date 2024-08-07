@extends('templates.user')

@section('title', "portfolio")
@section('custom-css')
<style>
    /* Default styles */
.filter-bar {
    display: flex;
    gap: 10px;
    align-items: center;
    justify-content: center;
    padding: 10px;
}

.filter-button {
    border: 2px solid #A51428;
    border-radius: 20px;
    padding: 5px 15px;
    color: #A51428;
    background-color: white;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}

.filter-button:hover {
    color: white;
    background-color: #A51428;
}

.filter-button.active {
    background-color: #A51428;
    color: white;
}

/* Responsive styles */
@media (max-width: 768px) {
    .filter-bar {
        flex-wrap: wrap; /* Allow items to wrap if needed */
        justify-content: center;
    }

    .filter-button {
        font-size: 14px; /* Smaller text size */
        padding: 5px 10px; /* Adjust padding */
    }
}

@media (max-width: 480px) {
    .filter-button {
        font-size: 12px; /* Even smaller text size */
        padding: 4px 8px; /* Further reduced padding */
    }
}

</style>
@endsection

{{-- @section('attr-nav')
<!-- Start Attribute Navigation -->
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
<!-- End Attribute Navigation -->
@endsection --}}

@section('content')

<div class="filter-bar" style="padding-top: 30px;">
    <button class="filter-button active" data-filter="all">All</button>
    <button class="filter-button" data-filter="Company Profile">Company Profile</button>
    <button class="filter-button" data-filter="E-Commerce">E-Commerce</button>
    <button class="filter-button" data-filter="ERP">ERP</button>
    <button class="filter-button" data-filter="Point Of Sale">Point Of Sale</button>
    <button class="filter-button" data-filter="E-Learning">E-Learning</button>
    <button class="filter-button" data-filter="Digital Marketing">Digital Marketing</button>
    <button class="filter-button" data-filter="E-Payment">E-Payment</button>
    <button class="filter-button" data-filter="Accounting">Accounting</button>
</div>

<div class="blog-area blog-grid-colum" style="padding: 10px;">
    <div class="container">
        <div class="row">
            <!-- Single Item -->
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 mb-50 portfolio-item" data-category="{{ $portfolio->kategori }}">
                <div class="blog-style-one">
                    <div class="thumb">
                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}"><img
                                src="{{asset('storage/portfolio/gambar/' . $portfolio->gambar)}}" alt="Image Not Found"
                                style="width: 100%; height: auto; object-fit: cover; border-radius: 10px; aspect-ratio: 3 / 2;"></a>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>{{ $portfolio->kategori }}</li>
                            </ul>
                        </div>
                        <h3 class="post-title"><a href="{{ route('portfolio.detail', $portfolio->slug) }}">{{
                                $portfolio->nama }}</a></h3>
                        <a href="{{ route('portfolio.detail', $portfolio->slug) }}" class="button-regular">
                            See Detail <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Item -->
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    <ul class="pagination">
                        @if(method_exists($portfolios, 'links'))
                        @foreach($portfolios->links() as $link)
                        @if($loop->first)
                        <li class="page-item"><a class="page-link" href="{{ $link->url }}" rel="prev"><i
                                    class="fas fa-angle-left"></i></a></li>
                        @endif
                        @if($loop->iteration % 12 == 0)
                        <li class="page-item"><a class="page-link" href="{{ $link->url }}">{{ $loop->iteration / 12 + 1
                                }}</a></li>
                        @endif
                        @if($loop->last)
                        <li class="page-item"><a class="page-link" href="{{ $link->url }}" rel="next"><i
                                    class="fas fa-angle-right"></i></a></li>
                        @endif
                        @endforeach
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection

@push('user_script')
<script>
    $(document).ready(function() {
        $('.filter-button').click(function() {
            $('.filter-button').removeClass('active');
            $(this).addClass('active');
            var filter = $(this).data('filter');

            if(filter == 'all') {
                $('.portfolio-item').show();
            } else {
                $('.portfolio-item').hide();
                $('.portfolio-item[data-category="' + filter + '"]').show();
            }
        });
    });
</script>
@endpush
