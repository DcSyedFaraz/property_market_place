@extends('frontend.layout.app')
@section('content')
 <!-- Bread Crumb -->
 <section class="sec-001 bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Offplan Projects</h1>
                <p class="text-center"><a href="index.html">Home</a> / <a href="#">Offplan Projects</a></p>
            </div>
        </div>
</section>
<!-- Bread Crumb End -->
    <section>
        <div class="sec-community-003">
            <div class="container">
                <div class="row d-flex align-items-center list-mob1">
                    <div class="col-md-3 col-6">
                        <a href="#">
                            <div class="tab-item1">
                                <i class="bi bi-building"></i>
                                <h4 class="text-center">Projects</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('developer_list') }}">
                            <div class="tab-item1">
                                <i class="bi bi-house"></i>
                                <h4 class="text-center">Developer</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('location') }}">
                            <div class="tab-item1">
                                <i class="bi bi-geo-alt"></i>
                                <h4 class="text-center">Location</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('community') }}">
                            <div class="tab-item1">
                                <i class="bi bi-hospital"></i>
                                <h4 class="text-center">Community</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-community-004 sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="detail">
                            <h5>Filter</h5>
                            <form id="price-range-form">
                                <label for="min-price" class="form-label">Starting Price Range </label>
                                <span id="min-price-txt">$0</span>
                                <input type="range" class="form-range" min="0" max="99" id="min-price" step="1"
                                    value="0">
                                <div id="solution_finder">
                                    <div class="city-sec mt-3 ">
                                        <select id="genre" onChange="return selectOption();">
                                            <option value="All">City</option>
                                            <option value="with-retina">With Retina Display</option>
                                            <option value="without-retina">Without Retina Display</option>
                                        </select>
                                    </div>
                                    <div class="type-sec mt-3">
                                        <select id="genre" onChange="return selectOption();">
                                            <option value="All">Property type</option>
                                            <option value="with-retina">With Retina Display</option>
                                            <option value="without-retina">Without Retina Display</option>
                                        </select>
                                    </div>
                                    <div class="develop-sec mt-3">
                                        <select id="genre" onChange="return selectOption();">
                                            <option value="All">Developers</option>
                                            <option value="with-retina">With Retina Display</option>
                                            <option value="without-retina">Without Retina Display</option>
                                        </select>
                                    </div>
                                    <div class="posses-sec mt-3">
                                        <select id="genre" onChange="return selectOption();">
                                            <option value="All">Possession</option>
                                            <option value="with-retina">With Retina Display</option>
                                            <option value="without-retina">Without Retina Display</option>
                                        </select>
                                    </div>
                                        <input class="mt-3 btn-search" type="submit" value="Search" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="mt-4">Offplan Projects</h2>
                                    <form>
                                        <ul class="form-style-101">
                                            <li>
                                                <select name="field4" class="field-select">
                                                    <option value="Advertise">Sort By</option>
                                                    <option value="Partnership">Partnership</option>
                                                    <option value="General Question">General</option>
                                                </select>
                                            </li>
                                            <li>
                                                <input type="search" placeholder="Search by property name...
                                                    " name="field3" class="field-long" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <div class="row list-one">
                                <div class="property-item d-flex align-items-center">
                                    <div class="col-md-5">
                                        <div class="property-img">
                                            <img src="./assets/img/project-img1.png" alt="property" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="property-desc">
                                            <h5 class="mt-4">AED 1000.00 /</h5>
                                            <h4>Royal Amwaj Residences South</h4>
                                            <h6>Palm Jumeriah</h6>
                                            <div class="dt10">
                                                <i class="fa fa-bed"><span> Bed 4</span></i>
                                                <i class="fa fa-bath"><span> Bath 2</span></i>
                                                <i class="fa fa-vector-square"><span> 1500 sqft</span></i>
                                            </div>
                                            <div class="btn-04 mt-2">
                                                <a href="#"><button class="btn-05">View Details</button></a>
                                                <a href="#"><button class="btn-05">Payment Plan</button></a>
                                                <a href="#"><button class="btn-05">Handover</button></a>
                                                <a href="#"><button class="btn-05">Brochure</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row list-one mt-4">
                                <div class="property-item d-flex align-items-center">
                                    <div class="col-md-5">
                                        <div class="property-img">
                                            <img src="./assets/img/project-img1.png" alt="property" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="property-desc">
                                            <h5 class="mt-4">AED 1000.00 /</h5>
                                            <h4>Royal Amwaj Residences South</h4>
                                            <h6>Palm Jumeriah</h6>
                                            <div class="dt10">
                                                <i class="fa fa-bed"><span> Bed 4</span></i>
                                                <i class="fa fa-bath"><span> Bath 2</span></i>
                                                <i class="fa fa-vector-square"><span> 1500 sqft</span></i>
                                            </div>
                                            <div class="btn-04 mt-2">
                                                <a href="#"><button class="btn-05">View Details</button></a>
                                                <a href="#"><button class="btn-05">Payment Plan</button></a>
                                                <a href="#"><button class="btn-05">Handover</button></a>
                                                <a href="#"><button class="btn-05">Brochure</button></a>
                                            </div>
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


    <!-- Logo Carousel Start -->
    <section>
        <div class="sec-7">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 me-auto text-center content2">
                        <h2>Discover Modern New developments.</h2>
                        <p>
                            Select your property type from our list of featured developers
                        </p>
                    </div>
                </div>
                <div class="owl-carousel logo-carol owl-theme mt-4">
                    <div class="item"><img src="assets/img/logo01.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo02.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo03.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo04.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo01.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo02.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo03.png" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Carousel End -->
@endsection
