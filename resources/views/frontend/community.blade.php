@extends('frontend.layout.app')
@section('content')

  <!-- Bread Crumb -->
  <section class="sec-001 bread-crumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Community List</h1>
                <p class="text-center"><a href="index.html">Home</a> / <a href="#">Offplan Projects</a></p>
            </div>
        </div>
</section>
<!-- Bread Crumb End -->

<section>
    <div class="sec-community-003">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 col-6">
                    <a href="{{ route('offplan') }}">
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
                        <div class="tab-item1 active_bar">
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
                        <h5>Top Communities</h5>
                        <ul class="top-links">
                            <li><a href="#">Apartment</a><span> 10 Property</span></li>
                            <li><a href="#">Condo</a><span> 10 Property</span></li>
                            <li><a href="#">Family House </a><span> 10 Property</span></li>
                            <li><a href="#">Modern Villa</a><span> 10 Property</span></li>
                            <li><a href="#">Town House</a><span> 10 Property</span></li>
                        </ul>
                    </div>
                    <div class="detail link-col1">
                        <h5>Poperty Details</h5>
                        <p><a href="#">Apartment</a>
                            <a href="#">Commercial Plot </a>
                            <a href="#">Condominiums</a>
                            <a href="#">Duets </a>
                            <a href="#">Duplex Apartment </a>
                            <a href="#"> Farmhouse  </a>
                            <a href="#">Hotel Rooms   </a>
                            <a href="#"> Industrial Plot  </a>
                            <a href="#"> Mansion  </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mt-4">Community</h2>
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
                        <a href="#"><div class="property-item d-flex align-items-center">
                            <div class="col-md-5">
                                <div class="property-img">
                                    <img src="./assets/img/list-img-01.png" alt="property" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="property-desc">
                                    <h5 class="mt-4">Total Projects <span>277</span></h5>
                                    <h4>Emaar Properties</h4>
                                    <ul class="mt-4">
                                        <li>Projects</li>
                                        <li>133</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus
                                        lorem,
                                        eleifend sit amet libero a, placerat auctor magna. Phasellus eu sapien
                                        euismod
                                        odio tempus ultrices ac a elit.</p>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <div class="row list-one">
                        <a href="#"><div class="property-item d-flex align-items-center">
                            <div class="col-md-5">
                                <div class="property-img">
                                    <img src="./assets/img/list-img-01.png" alt="property" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="property-desc">
                                    <h5 class="mt-4">Total Projects <span>277</span></h5>
                                    <h4>Emaar Properties</h4>
                                    <ul class="mt-4">
                                        <li>Projects</li>
                                        <li>133</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus
                                        lorem,
                                        eleifend sit amet libero a, placerat auctor magna. Phasellus eu sapien
                                        euismod
                                        odio tempus ultrices ac a elit.</p>
                                </div>
                            </div>
                        </div></a>
                    </div>
                    <div class="row list-one">
                        <a href="#"><div class="property-item d-flex align-items-center">
                            <div class="col-md-5">
                                <div class="property-img">
                                    <img src="./assets/img/list-img-01.png" alt="property" class="img-fluid" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="property-desc">
                                    <h5 class="mt-4">Total Projects <span>277</span></h5>
                                    <h4>Emaar Properties</h4>
                                    <ul class="mt-4">
                                        <li>Projects</li>
                                        <li>133</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus
                                        lorem,
                                        eleifend sit amet libero a, placerat auctor magna. Phasellus eu sapien
                                        euismod
                                        odio tempus ultrices ac a elit.</p>
                                </div>
                            </div>
                        </div></a>
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
