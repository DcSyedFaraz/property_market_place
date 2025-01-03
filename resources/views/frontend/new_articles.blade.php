@extends('frontend.layout.app')
@section('content')
 <!-- Bread Crumb -->
 <section class="sec-001 bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">News & Articles</h1>
                <p class="text-center"><a href="/">Home</a> / <a href="#">News & Articles</a></p>
            </div>
        </div>
</section>
<!-- Bread Crumb End -->

<!-- SEC - 1 -->
<section>
    <div class="sec-news-001 sec-space">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="news-img-cont back-img1">
                                <h6>21 Properties</h6>
                                <h5>Apartment </h5>
                                <div class="btn-ico">
                                    <a href="#">More Details</a>
                                    <a href="#"><i class="bi bi-play"></i></a>
                                </div>
                            </div>
                            <div class="news-img-cont back-img5 mt-3">
                                <h6>21 Properties</h6>
                                <h5>Apartment </h5>
                                <div class="btn-ico">
                                    <a href="#">More Details</a>
                                    <a href="#"><i class="bi bi-play"></i></a>
                                </div>
                            </div>
                            <div class="news-img-cont back-img4 mt-3">
                            <h6>21 Properties</h6>
                            <h5>Apartment </h5>
                            <div class="btn-ico">
                                <a href="#">More Details</a>
                                <a href="#"><i class="bi bi-play"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="news-img-cont back-img2 mt-3">
                            <h6>21 Properties</h6>
                            <h5>Apartment </h5>
                            <div class="btn-ico">
                                <a href="#">More Details</a>
                                <a href="#"><i class="bi bi-play"></i></a>
                            </div>
                        </div>
                        <div class="news-img-cont back-img3 mt-3">
                            <h6>21 Properties</h6>
                            <h5>Apartment </h5>
                            <div class="btn-ico">
                                <a href="#">More Details</a>
                                <a href="#"><i class="bi bi-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="articles-cont">
                    <div class="news-desc">
                        <h2 class="mt-4"><a href="#">New Articles</a></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus nisl arcu, et
                            feugiat ante aliquam id. Donec tincidunt eu est sit amet tempor. Sed ut accumsan
                            magna, sed facilisis elit. Proin dapibus et elit ac </p>
                    </div>
                    <div class="news-img-cont back-img6 mt-3">
                        <h6>21 Properties</h6>
                        <h5>Apartment </h5>
                        <div class="btn-ico">
                            <a href="#">More Details</a>
                            <a href="#"><i class="bi bi-play"></i></a>
                        </div>
                    </div>
                    <a class="btn10 mt-4" href="#">View More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- SEC - 2 -->
<section>
    <div class="sec-serv-003 sec-space">
        <div class="container">
            <h2>New Projects</h2>
            <div class="row d-flex align-items-center mt-4">
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Hill Estates</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Alba Residences</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Dhanya bay</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Dhanya bay</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEC - 3 -->
<section>
    <div class="sec-serv-003 sec-space">
        <div class="container">
            <h2>Latest Articles</h2>
            <div class="row d-flex align-items-center mt-4">
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Hill Estates</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Alba Residences</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Dhanya bay</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="serv-item">
                            <h4 class="text-center">Dhanya bay</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Logo Carousel Start -->
<section>
    <div class="sec-7">
        <div class="container">
            <div class="row">
                <div class="col-md-12 me-auto text-center content2">
                    <h2>Discover Modern New developments.</h2>
                    <p>Select your property type from our list of featured developers</p>
                </div>
            </div>
            <div class="owl-carousel logo-carol owl-theme mt-4">
                <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo04.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt="" /></div>
                <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt="" /></div>
            </div>
        </div>
    </div>
</section>
<!-- Logo Carousel End -->
@endsection
