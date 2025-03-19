@extends('frontend.layout.app')
@section('content')
    <section class="propdetails-banner">
        <div class="container">
            <h2 class="serviceh2">Properties Detail</h2>
            <p class="banner-p">We are a full-service real estate company in UAE that is able to assist you with all
                your real estate needs.</p>
        </div>
    </section>
    <section class="about-main">
        <div class="container">
            <div class="contact-main">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="contact1a">New Property</h4>
                        <h5 class="prop-1a">{{ $property->title }} </h5>
                        <p class="prop-1b">Test</p>

                        <h5 class="prop-1a">Description</h5>
                        <p class="prop-1b">{!! $property->description !!} </p>

                        <h5 class="prop-1a">Location</h5>
                        <p class="prop-1b">{{ $property->location }} </p>

                        <h5 class="prop-1a">Property Title</h5>
                        <p class="prop-1b">{{ $property->title }}</p>

                        <div class="property-details">
                            <div>
                                <h5 class="prop-1a">Area ( sq ft )</h5>
                                <p class="prop-1b">{{ $property->area }}</p>
                            </div>

                            <div>
                                <h5 class="prop-1a">No. Bedrooms</h5>
                                <p class="prop-1b">{{ $property->bedrooms }}</p>
                            </div>

                            <div>
                                <h5 class="prop-1a">No. Bathrooms</h5>
                                <p class="prop-1b">{{ $property->bathrooms }}</p>
                            </div>

                            <div>
                                <h5 class="prop-1a">Utility Area</h5>
                                <p class="prop-1b">{{ $property->utility_area }}</p>
                            </div>

                            <div>
                                <h5 class="prop-1a">Balcony Area</h5>
                                <p class="prop-1b">{{ $property->balcony_area }}</p>
                            </div>

                            <div>
                                <h5 class="prop-1a">Unit Area</h5>
                                <p class="prop-1b">{{ $property->unit_area }} </p>
                            </div>
                        </div>

                        <h5 class="prop-1a">Status</h5>
                        <p class="prop-1b">{{ $property->status }}</p>

                    </div>
                    <div class="col-md-6">
                        <div class="main-image">
                            <img src="{{ asset('storage/' . $property->main_image) }}" alt="main-1" />
                        </div>
                        <!-- <div class="second-image">
                                            <img src="./assets/images/property-details/main-2.png" alt="main-2" />
                                            <img src="./assets/images/property-details/main-2.png" alt="main-2" />
                                        </div> -->


                        <div class="image-gallery">
                            @foreach ($property->propertygallery as $gallery)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="main-3">
                            @endforeach
                        </div>
                    </div>
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
