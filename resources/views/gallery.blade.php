@extends('master')
@section('onlineAdmission')    
    
    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray text-center shadow dark text-light bg-cover" style="background-image: url(assets/img/shape/6.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Gallery</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Star Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="magnific-mix-gallery masonary">
                <div id="portfolio-grid" class="gallery-items colums-3">

                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{ asset('userFrontend/assets/img/gallery/g1 (1).jpg')}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="assets/img/gallery/g1 (1).jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{ asset('userFrontend/assets/img/gallery/g1 (2).jpg')}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="assets/img/gallery/g1 (2).jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{ asset('userFrontend/assets/img/gallery/g1 (3).jpg')}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="assets/img/gallery/g1 (3).jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{ asset('userFrontend/assets/img/gallery/g1 (4).jpg')}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="assets/img/gallery/g1 (4).jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="pf-item">
                        <div class="item-inner">
                            <img src="{{ asset('userFrontend/assets/img/gallery/g1 (5).jpg')}}" alt="Thumb">
                            <div class="effect-info">
                                <a href="assets/img/gallery/g1 (5).jpg" class="item popup-link">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
            </div>


            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

@endsection