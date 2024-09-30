@extends('frontend.layout.app')
@section('content')
    <!-- Bread Crumb -->
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">


                    <h1 class="text-center">{{ $developers->name }}</h1>
                    <p class="text-center"><a href="index.html">Home</a> / <a href="#">Services</a></p>

                </div>
            </div>
    </section>
    <!-- Bread Crumb End -->

    <section>
        <div class="sec-serv-002 sec-space">
            <div class="container">

                <div class="row d-flex text-align-center">
                    <div class="col-md-12">
                        <div class="about-para">
                            <h2>{{ $developers->name }}</h2>
                            <p>{{ $developers->description }}</p>

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
                                <img src="{{ asset('storage/' .$developers->logo) }}" width="100" alt="{{ $developers->name }}">

                                @if ($developers->developers_properties && $developers->developers_properties->count() > 0)
                                <p>{{ $developers->developers_properties->count() }}</p>
                            @else
                                <p>No properties found</p>
                            @endif
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
                        <h2>Discover Modern New comunitiesments.</h2>
                        <p>Select your property type from our list of featured comunitiesers</p>
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
