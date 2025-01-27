@extends('frontend.layout.app')
@section('content')
    <!-- Bread Crumb -->
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Our Services</h1>
                    <p class="text-center"><a href="/">Home</a> / <a href="#">Services</a></p>
                </div>
            </div>
    </section>
    <!-- Bread Crumb End -->

    <section>
        <div class="sec-serv-002 sec-space">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12">
                        <div class="about-para">
                            <h2>Our Services</h2>
                            <p>We are a full-service real estate company in UAE that is able to assist you with all your
                                real estate needs.
                                " Providing our clients with the highest level of service is our top priority "
                            </p>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tempus nisl arcu, et
                            feugiat
                            ante aliquam id. Donec tincidunt eu est sit amet tempor. Sed ut accumsan magna, sed
                            facilisis elit. Proin dapibus et elit ac commodo. Duis non euismod enim. Sed imperdiet
                            venenatis neque nec tempus. Nulla facilisi. Donec quis nunc ligula. Suspendisse pretium
                            risus a efficitur eleifend. In vel nisl orci. Praesent aliquam erat facilisis,</p> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-our-serv-002 sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i> Commercial and residential real estate management</h3>
                            <p>Experienced real estate professionals on our team can help you manage your properties
                                efficiently.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i> Real estate brokerage</h3>
                            <p>We connect buyers and sellers to help them achieve their real estate goals.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i> Sales and rental services</h3>
                            <p>Our goal is to generate leads, close deals, and grow your business.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i> Facilities management</h3>
                            <p>What makes Property Angel the best NRI Property Management.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i> Angel Services</h3>
                            <p>provide more significant financial support.</p>
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
