@extends('frontend.layout.app')
@section('content')
    <section class="service">
        <div class="container">
            <h2 class="serviceh2">Services</h2>
            <p class="banner-p">We are a full-service real estate company in UAE that is able to assist you with all
                your real estate needs.</p>
        </div>
    </section>
    <section class="about-main">
        <div class="container">
            <div class="service1">
                <div class="service-imgbox">
                    <a href="#">
                        <img src="{{ asset('assets/images/service/s1.png') }}" />
                        <h3>Commercial and residential real estate management</h3>
                        <p>Experienced real estate professionals on our team can help you manage your properties
                            efficiently.</p>
                    </a>
                </div>
                <div class="service-imgbox">
                    <a href="#">
                        <img src="{{ asset('assets/images/service/s2.png') }}" />
                        <h3>Real estate brokerage</h3>
                        <p>We connect buyers and sellers to help them achieve their real estate goals.</p>
                    </a>
                </div>
                <div class="service-imgbox">
                    <a href="#">
                        <img src="{{ asset('assets/images/service/s3.png') }}" />
                        <h3>Sales and rental services</h3>
                        <p>Our goal is to generate leads, close deals, and grow your business.</p>
                    </a>
                </div>
                <div class="service-imgbox">
                    <a href="#">
                        <img src="{{ asset('assets/images/service/s4.png') }}" />
                        <h3>Facilities management</h3>
                        <p>What makes Property Angel the best NRI Property Management.</p>
                    </a>
                </div>
                <div class="service-imgbox">
                    <a href="#">
                        <img src="{{ asset('assets/images/service/s5.png' )}}" />
                        <h3>Angel Services</h3>
                        <p>provide more significant financial support.</p>
                    </a>
                </div>
            </div>
            <div class="about-3">
                <div class="container">
                    <h3 class="about3a">Be the first to know.</h3>
                    <p class="about3b">We invite you to register below and we’ll be in touch with exclusive updates and
                        announcements about pre-leasing opportunities.</p>
                    <form>
                        <input type="email" placeholder="Enter Your Email Address" name="email" />
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
