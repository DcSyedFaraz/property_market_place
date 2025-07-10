@extends('frontend.layout.app')
@section('content')
    <section class="propdetails-banner">
        <div class="container">
            <h2 class="serviceh2">
                {{ __('propdetails.banner.title', ['location' => $locationName ?? ($location ?? '')]) }}
            </h2>
            <p class="banner-p">
                {{ __('propdetails.banner.description') }}
            </p>
        </div>
    </section>

    <section class="about-main">
        <div class="container">
            <div class="contact-main project-main">
                <div class="row">
                    <div class="col-md-6">
                        <form action="#" class="filter-form">
                            <h4 class="contact1a">{{ __('filter.heading') }}</h4>

                            <select>
                                <option disabled selected>{{ __('filter.starting_price') }}</option>
                                <option>{{ __('filter.price.100') }}</option>
                                <option>{{ __('filter.price.200') }}</option>
                                <option>{{ __('filter.price.300') }}</option>
                            </select>

                            <select>
                                <option disabled selected>{{ __('filter.city') }}</option>
                                <option>{{ __('filter.city.Dubai') }}</option>
                                <option>{{ __('filter.city.AbuDhabi') }}</option>
                                <option>{{ __('filter.city.Sharjah') }}</option>
                                <option>{{ __('filter.city.AlAin') }}</option>
                                <option>{{ __('filter.city.Fujairah') }}</option>
                                <option>{{ __('filter.city.RAK') }}</option>
                            </select>

                            <select>
                                <option disabled selected>{{ __('filter.property_type') }}</option>
                                <option>{{ __('filter.property_type.Residential') }}</option>
                                <option>{{ __('filter.property_type.Commercial') }}</option>
                                <option>{{ __('filter.property_type.OffPlan') }}</option>
                                <option>{{ __('filter.property_type.Mall') }}</option>
                                <option>{{ __('filter.property_type.Villa') }}</option>
                            </select>
                            {{-- <select>
                                <option disabled selected>Developer</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select> --}}
                            <h4 class="contact1a">{{ __('status') }}</h4>
                            <select>
                                <option disabled selected>{{ __('filter.status.select') }}</option>
                                <option>{{ __('filter.status.sold') }}</option>
                                <option>{{ __('filter.status.available') }}</option>
                            </select>

                            <button type="submit" class="filter-btn">
                                {{ __('filter.button.search') }}
                            </button>
                        </form>
                    </div>

                    <div class="col-md-6">
                        @if (isset($location))
                            <form method="GET" action="{{ route('properties.byLocation', $location) }}"
                                class="search-form">

                                <select name="sort" onchange="this.form.submit()">
                                    <option value="">{{ __('sort.heading') }}</option>
                                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>
                                        {{ __('sort.newest') }}
                                    </option>
                                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                        {{ __('sort.oldest') }}
                                    </option>
                                    <option value="price_high_to_low"
                                        {{ request('sort') == 'price_high_to_low' ? 'selected' : '' }}>
                                        {{ __('sort.price_high_to_low') }}
                                    </option>
                                    <option value="price_low_to_high"
                                        {{ request('sort') == 'price_low_to_high' ? 'selected' : '' }}>
                                        {{ __('sort.price_low_to_high') }}
                                    </option>
                                </select>

                                <input type="text" placeholder="{{ '    ' . __('sort.search_placeholder') }}" />
                            </form>
                        @endif

                        @forelse ($properties as $project)
                            <img src="{{ asset('storage/' . $project->main_image) }}" class="property-image" />
                            <h4 class="property-price">AED {{ $project->price }}</h4>

                            {{-- <p class="property-det" style="color: white;   ">
                                {!! \Illuminate\Support\Str::limit($project->description, 10) !!}
                            </p> --}}

                            <div class="details">
                                <img src="{{ asset('/assets/images/projects/location.png') }}" width="30" />
                                <h4 class="property-price">{{ $project->location }}</h4>

                                @if ($project->bedrooms > 0)
                                    <div class="icons">
                                        {{-- <img src="{{ asset('/assets/images/projects/icon.png') }}" /> --}}
                                        <img src="{{ asset('/assets/images/projects/bed.png') }}" />
                                        {{ $project->bedrooms }}

                                    </div>
                                @endif

                                @if ($project->bathrooms > 0)
                                    <div class="icons">
                                        {{-- <img src="{{ asset('/assets/images/projects/icon.png') }}" /> --}}
                                        <img src="{{ asset('/assets/images/projects/bathtub.png') }}" />
                                        {{ $project->bathrooms }}
                                    </div>
                                @endif
                            </div>

                            <a href="{{ route('projects', $project->id) }}" class="viewdetails-btn mb-3 text-white">
                                {{ __('filter.button.details') }}
                            </a>
                            <hr>
                        @empty
                            <p>{{ __('projects.none') }}</p>
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="about-3">
                <div class="container">
                    <h3 class="about3a">{{ __('notify.heading') }}</h3>
                    <p class="about3b">{{ __('notify.description') }}</p>
                    <form>
                        <input type="email" placeholder="{{ __('notify.email_placeholder') }}" name="email" />
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
