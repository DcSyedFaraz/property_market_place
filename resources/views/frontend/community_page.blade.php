@extends('frontend.layout.app')
@section('content')
    <!-- Bread Crumb -->
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <h1 class="text-center">{{ $community->name }}</h1>
                    <p class="text-center"><a href="index.html">Home</a> / <a href="#">Services</a></p>

                </div>
            </div>
    </section>
    <!-- Bread Crumb End -->

    <section>
        <div class="sec-serv-002 sec-space">
            <div class="container">

                <div class="row d-flex align-items-center">
                    <div class="col-md-7">
                        <div class="about-para">
                            <h2>{{ $community->name }}</h2>
                            <p>{{ $community->description }}</p>

                        </div>
                    </div>
                    <div class="col-md-5 mt-4">
                        <div class="about-img">
                            <img src="{{ asset('storage/' .$community->image) }}" alt="">
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
                    @forelse ($community->amenities as $amenity)
                    {{ dd($community->amenities) }}
                    <div class="col-md-6">
                        <div class="detail icon-text2">
                            <h3><i class="bi bi-house-door"></i>{{ $amenity->name }}</h3>
                            <p>{{ $amenity->description }}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6">
                        <p class="text-center">No amenity found.</p>
                    </div>
                @endforelse



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
                        <h2>Discover Modern New comunitiesments.</h2>
                        <p>Select your property type from our list of featured comunitiesers</p>
                    </div>
                </div>
                <div class="owl-carousel logo-carol owl-theme mt-4">
                    <div class="item"><img src="assets/img/logo01.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo02.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo03.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo04.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo01.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo02.png" alt=""></div>
                    <div class="item"><img src="assets/img/logo03.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Carousel End -->
@endsection
