@extends('frontend.layout.app')
@section('content')
    <style>
        .propdetails-banner {
            background-repeat: no-repeat, no-repeat;
            background-position: center center, center center;
            background-size: cover, cover;

            height: 70vh;
            display: flex;
            align-items: center;
            text-align: center;
        }
    </style>
    <section class="propdetails-banner"
        style="background-image:
        linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url('{{ asset("assets/images/$bannerImage") }}');">
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
                        <form method="GET" action="{{ route('properties.index') }}" class="filter-form">
                            <h4 class="contact1a">{{ __('filter.heading') }}</h4>


                            <select name="city">
                                <option disabled selected>{{ __('filter.city') }}</option>
                                <option value="Dubai" {{ request('city') == 'Dubai' ? 'selected' : '' }}>
                                    {{ __('filter.city.Dubai') }}</option>
                                <option value="Abu Dhabi" {{ request('city') == 'Abu Dhabi' ? 'selected' : '' }}>
                                    {{ __('filter.city.AbuDhabi') }}</option>
                                <option value="Sharjah" {{ request('city') == 'Sharjah' ? 'selected' : '' }}>
                                    {{ __('filter.city.Sharjah') }}</option>
                                <option value="Al Ain" {{ request('city') == 'Al Ain' ? 'selected' : '' }}>
                                    {{ __('filter.city.AlAin') }}</option>
                                <option value="Fujairah" {{ request('city') == 'Fujairah' ? 'selected' : '' }}>
                                    {{ __('filter.city.Fujairah') }}</option>
                                <option value="Ras Al Khaimah" {{ request('city') == 'Ras Al Khaimah' ? 'selected' : '' }}>
                                    {{ __('filter.city.RAK') }}</option>
                            </select>

                            <select name="property_type">
                                <option disabled selected>{{ __('filter.property_type') }}</option>
                                <option value="Residential"
                                    {{ request('property_type') == 'Residential' ? 'selected' : '' }}>
                                    {{ __('filter.property_type.Residential') }}</option>
                                <option value="Commercial"
                                    {{ request('property_type') == 'Commercial' ? 'selected' : '' }}>
                                    {{ __('filter.property_type.Commercial') }}</option>
                                <option value="Mall" {{ request('property_type') == 'Mall' ? 'selected' : '' }}>
                                    {{ __('filter.property_type.Mall') }}</option>
                                <option value="Villa" {{ request('property_type') == 'Villa' ? 'selected' : '' }}>
                                    {{ __('filter.property_type.Villa') }}</option>
                            </select>
                            <h4 class="contact1a">{{ __('status') }}</h4>
                            <select name="status">
                                <option disabled selected>{{ __('filter.status.select') }}</option>
                                <option value="sold" {{ request('status') == 'sold' ? 'selected' : '' }}>
                                    {{ __('filter.status.sold') }}</option>
                                <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>
                                    {{ __('filter.status.available') }}</option>
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
                            <p class="property-det" style="color: white;   ">
                            </p>
                            <div class="details">
                                {{-- <img src="{{ asset('/assets/images/projects/location.png') }}" width="30" /> --}}
                                <i class="fa-solid fa-location-dot"></i>
                                <h4 class="property-price">{{ $project->location }}</h4>

                                @if ($project->bedrooms > 0)
                                    <div class="icons">
                                        {{-- <img src="{{ asset('/assets/images/projects/icon.png') }}" /> --}}
                                        {{-- <img src="{{ asset('/assets/images/projects/bed.png') }}" /> --}}
                                       <i class="fa-solid fa-bed"></i>
                                        {{ $project->bedrooms }}

                                    </div>
                                @endif

                                @if ($project->bathrooms > 0)
                                    <div class="icons">
                                        {{-- <img src="{{ asset('/assets/images/projects/icon.png') }}" /> --}}
                                        {{-- <img src="{{ asset('/assets/images/projects/bathtub.png') }}" /> --}}
                                        <i class="fa-solid fa-bath"></i>
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
