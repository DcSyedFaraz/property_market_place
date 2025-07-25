@extends('frontend.layout.app')
@section('content')
    <style>
        ul {
            color: white;
        }
    </style>
    {{-- @if (app()->getLocale() == 'ar')
        <style>
            .banner {
                text-align: right !important;
            }
        </style>
    @endif --}}

    <section class="banner">
        <div class="container">
            <h2 class="bannerh2">{{ __('About us') }}</h2>
        </div>
    </section>

    <section class="about-main">
        <div class="container-fluid">
            {{-- <div class="about1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/about (7).jpg') }}" alt="about1" class="about1-img" />
                    </div>
                    <div class="col-md-6">
                        <p class="about1c">{{ __('intro') }}</p>
                    </div>
                </div>
            </div> --}}

            <div class="about2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('who_we_are_title') }}</h3>
                        <p class="about1c">{{ __('who_we_are_text') }}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 1.png') }}" alt="about1" class="about2-img" />
                    </div>
                </div>
            </div>

            <div class="about1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 2.png') }}" alt="about1" class="about1-img" />
                    </div>
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('services_title') }}</h3>
                        <ul>
                            <ul>
                                <li>{{ __('services_list.0') }}</li>
                                <li>{{ __('services_list.1') }}</li>
                                <li>{{ __('services_list.2') }}</li>
                                <li>{{ __('services_list.3') }}</li>
                                <li>{{ __('services_list.4') }}</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="about2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('goal_title') }}</h3>
                        <p class="about1c">{{ __('goal_text') }}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 3.png') }}" alt="about1" class="about2-img" />
                    </div>
                </div>
            </div>

            <div class="about1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 7.png') }}" alt="about1" class="about1-img" />
                    </div>
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('vision_title') }}</h3>
                        <p class="about1c">{{ __('vision_text') }}</p>
                    </div>
                </div>
            </div>

            <div class="about2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('mission_title') }}</h3>
                        <p class="about1c">{{ __('mission_text') }}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 8.png') }}" alt="about1" class="about2-img" />
                    </div>
                </div>
            </div>

            <div class="about1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/images/about/Union 9.png') }}" alt="about1" class="about1-img" />
                    </div>
                    <div class="col-md-6">
                        <h3 class="about1b">{{ __('why_choose_us_title') }}</h3>
                        <ul>
                            <li>{{ __('why_choose_us_list.0') }}</li>
                            <li>{{ __('why_choose_us_list.1') }}</li>
                            <li>{{ __('why_choose_us_list.2') }}</li>
                            <li>{{ __('why_choose_us_list.3') }}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="about-3">
                <div class="container">
                    <h3 class="about3a">{{ __('subscribe_title') }}</h3>
                    <p class="about3b">{{ __('subscribe_text') }}</p>
                    <form>
                        <input type="email" placeholder="{{ __('email_placeholder') }}" name="email" />
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
