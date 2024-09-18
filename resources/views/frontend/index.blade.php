@extends('frontend.layout.app')
@section('content')
    <!-- Hero Section -->
    <section>
        <div class="sec-1 hero">
            <div class="row">
                <div class="container">
                    <div class="col-lg-8">
                        <h1>Modern Apartments Exclusive Listing</h1>
                        <p>
                            Get the features you in all the property we offer with the best
                            price you can get
                        </p>
                        <div class="img-text">
                            <img src="{{ asset('assets/img/testi-img.png') }}" alt="" />
                            <p>50+ Agents. See all listings.</p>
                        </div>
                    </div>
                    <div class="social-link mob-1">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form10">
                            <h3>WHAT ARE YOU LOOKING FOR?</h3>
                            <p>(Easily find the house of your choice)</p>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">
                                    Buy
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Lease
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <form action="" id="state-form">
                                    <select class="f1">
                                        <option value="">Property Type</option>
                                        <option value="">Property Type 1</option>
                                    </select>

                                    <select class="f2">
                                        <option value="">
                                            City Neighbourhood, Community
                                        </option>
                                        <option value="">City Neighbourhood</option>
                                    </select>

                                    <button class="button has-icon icon-send">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="tab-pane" id="profile">
                                <form action="" id="state-form"></form>
                                <select class="f1">
                                    <option value="">Property Type</option>
                                    <option value="">Property Type 1</option>
                                </select>

                                <select class="f2">
                                    <option value="">
                                        City Neighbourhood, Community
                                    </option>
                                    <option value="">City Neighbourhood</option>
                                </select>

                                <button class="button has-icon icon-send">
                                    <i class="bi bi-search"></i>
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 me-auto text-center content1">
                        <h2>Off plan Projects</h2>
                        <p>
                            New off-plan developments
                        </p>
                        <div class="owl-carousel service-carol owl-theme">
                            <div class="item">
                                <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                                <a href="{{ route('projects') }}">
                                    <h4>Dubai</h4>
                                </a>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                                <a href="#">
                                    <h4>Abu Dhabi</h4>
                                </a>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/img03.png') }}" alt="" />
                                <a href="#">
                                    <h4>Sharjah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/img04.png') }}" alt="" />
                                <a href="#">
                                    <h4>Ras Al Khaimah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                                <a href="#">
                                    <h4>Ajman</h4>
                                </a>
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                                <a href="#">
                                    <h4>Sharjah</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="le1">
                            <h2 class="le-title">New developments</h2>
                            <p class="card-text">
                                Take a look at new off-plan developments in and around Dubai
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le2 align-items-center justify-content-end d-flex">
                            <a href="">All Properties</a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('assets/img/card01.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alpina house</h5>
                                <p class="card-text">
                                    Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create
                                    interactive.
                                </p>
                                <h6 class="price0">$1,960.00</h6>
                                <div class="serv-icon mt-4">
                                    <i class="fa fa-bed"><span>Bed 4</span></i>
                                    <i class="fa fa-bath"><span>Bath 2</span></i>
                                    <i class="fa fa-vector-square"><span>1500 sqft</span></i>
                                </div>
                                <div class="det d-flex align-items-center mt-4">
                                    <p>Juniatur Rahman</p>
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('assets/img/card01.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alpina house</h5>
                                <p>Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create
                                    interactive.
                                </p>
                                <h6 class="price0">$1,960.00</h6>
                                <div class="serv-icon mt-4">
                                    <i class="fa fa-bed"><span>Bed 4</span></i>
                                    <i class="fa fa-bath"><span>Bath 2</span></i>
                                    <i class="fa fa-vector-square"><span>1500 sqft</span></i>
                                </div>
                                <div class="det d-flex align-items-center mt-4">
                                    <p>Juniatur Rahman</p>
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('assets/img/card01.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Alpina house</h5>
                                <p>Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create
                                    interactive.
                                </p>
                                <h6 class="price0">$1,960.00</h6>
                                <div class="serv-icon mt-4">
                                    <i class="fa fa-bed"><span>Bed 4</span></i>
                                    <i class="fa fa-bath"><span>Bath 2</span></i>
                                    <i class="fa fa-vector-square"><span>1500 sqft</span></i>
                                </div>
                                <div class="det d-flex align-items-center mt-4">
                                    <p>Juniatur Rahman</p>
                                    <a href="">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sec 5 -->
    <section>
        <div class="sec-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="le5">
                            <h2 class="le-title">Browse by property type</h2>
                            <p class="card-text">
                                Handpicked projects for you
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le5 align-items-center justify-content-end d-flex">
                            <a href="">All Properties</a>
                        </div>
                    </div>
                    <div class="owl-carousel service-carol owl-theme mt-4">
                        <div class="item">
                            <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                            <a href="#">
                                <h4>Dubai</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Abu Dhabi</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img03.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img04.png') }}" alt="" />
                            <a href="#">
                                <h4>Ras Al Khaimah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                            <a href="#">
                                <h4>Ajman</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="sec-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod01.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        <span>Find, Buy & Own Your Dream Home</span>
                                        <h2>Buy a home</h2>
                                        <p>Explore Apartments, Villas, Penthouses, Mansions and more at service.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        <span>Find, Buy & Own Your Dream Home</span>
                                        <h2>Buy a home</h2>
                                        <p>Explore Apartments, Villas, Penthouses, Mansions and more at service.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod01.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        <span>Find, Buy & Own Your Dream Home</span>
                                        <h2>Buy a home</h2>
                                        <p>Explore Apartments, Villas, Penthouses, Mansions and more at service.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        <span>Find, Buy & Own Your Dream Home</span>
                                        <h2>Buy a home</h2>
                                        <p>Explore Apartments, Villas, Penthouses, Mansions and more at service.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

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
                    <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo04.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt=""></div>
                </div>
            </div>
        </div>

    </section>
@endsection
