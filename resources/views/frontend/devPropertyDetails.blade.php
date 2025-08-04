@extends('frontend.layout.app')
@section('content')
    <section class="propdetails-banner">
        <div class="container">
            <h2 class="serviceh2">@lang('properties.property_detail')</h2>
            <p class="banner-p">@lang('properties.banner_description')</p>
        </div>
    </section>

    <section class="about-main">
        <div class="container">
            <div class="contact-main">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="contact1a">@lang('properties.new_property')</h4>
                        <h5 class="prop-1a">{{ $property->title }}</h5>

                        <h5 class="prop-1a">@lang('properties.description')</h5>
                        <p class="prop-1b">{!! $property->translated('description') !!}</p>

                        <h5 class="prop-1a">@lang('properties.location')</h5>
                        <p class="prop-1b">{{ $property->location }}</p>

                        <h5 class="prop-1a">@lang('properties.property_title')</h5>
                        <p class="prop-1b">{!! $property->translated('title') !!}</p>

                        <div class="property-details">
                            <div>
                                <h5 class="prop-1a">@lang('properties.area_sqft')</h5>
                                <p class="prop-1b">{{ $property->area }}</p>
                            </div>

                            @if ($property->bedrooms > 0)
                                <div>
                                    <h5 class="prop-1a">{{ __('properties.no_bedrooms') }}</h5>
                                    <p class="prop-1b">{{ $property->bedrooms }}</p>
                                </div>
                            @endif

                            @if ($property->bathrooms > 0)
                                <div>
                                    <h5 class="prop-1a">@lang('properties.no_bathrooms')</h5>
                                    <p class="prop-1b">{{ $property->bathrooms }}</p>
                                </div>
                            @endif

                            @if ($property->utility_area > 0)
                                <div>
                                    <h5 class="prop-1a">@lang('properties.utility_area')</h5>
                                    <p class="prop-1b">{{ $property->utility_area }}</p>
                                </div>
                            @endif

                            @if ($property->balcony_area > 0)
                                <div>
                                    <h5 class="prop-1a">@lang('properties.balcony_area')</h5>
                                    <p class="prop-1b">{{ $property->balcony_area }}</p>
                                </div>
                            @endif

                            @if ($property->unit_area > 0)
                                <div>
                                    <h5 class="prop-1a">@lang('properties.unit_area')</h5>
                                    <p class="prop-1b">{{ $property->unit_area }}</p>
                                </div>
                            @endif
                        </div>

                        <h5 class="prop-1a">@lang('properties.status')</h5>
                        <p class="prop-1b text-capitalize">{{ $property->status }}</p>
                    </div>

                    <div class="col-md-6">
                        <div class="main-image">
                            <img src="{{ asset('storage/' . $property->main_image) }}" alt="main-1" />
                        </div>

                        <div class="image-gallery mt-3">
                            @foreach ($property->propertygallery as $gallery)
                                <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery-img">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

          {{-- <div class="about-3">
                <div class="container">
                    <h3 class="about3a">Be the first to know.</h3>
                    <p class="about3b">We invite you to register below and we’ll be in touch with exclusive updates and
                        announcements about pre-leasing opportunities.</p>
                    <form>
                        <input type="email" placeholder="Enter Your Email Address" name="email" />
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
