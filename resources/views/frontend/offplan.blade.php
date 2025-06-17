@extends('frontend.layout.app')
@section('content')
    <section class="propdetails-banner">
        <div class="container">
            <h2 class="serviceh2">{{ $location ?? '' }} Projects</h2>
            <p class="banner-p">We are a full-service real estate company in UAE that is able to assist you with all
                your real estate needs.</p>
        </div>
    </section>
    <section class="about-main">
        <div class="container">
            <div class="contact-main project-main">
                <div class="row">
                    <div class="col-md-6">
                        <form action="#" class="filter-form">
                            <h4 class="contact1a">Filter</h4>
                            <select>
                                <option disabled selected>Starting Price Range</option>
                                <option>100$</option>
                                <option>200$</option>
                                <option>300$</option>
                            </select>
                            <select>
                                <option disabled selected>City</option>
                                <option>Dubai</option>
                                <option>Abu Dubai</option>
                                <option>Sharjah</option>
                                <option>Al Ain</option>
                                <option>Fujairah</option>
                                <option>Ras Al Khaimah</option>
                            </select>
                            <select>
                                <option disabled selected>Property Type</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                                <option>Off-Plan</option>
                                <option>Mall</option>
                                <option>Villa</option>
                            </select>
                               {{-- <select>
                                <option disabled selected>Developer</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select> --}}
                            <h4 class="contact1a">Status</h4>
                            <select>
                                <option disabled selected>Select Status</option>
                                <option>sold</option>
                                <option>available</option>
                            </select>
                            {{-- <select>
                                <option disabled selected>Accommodation</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                                <option>Lorem Ipsum</option>
                            </select> --}}

                            <button type="submit" class="filter-btn">Search</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        @if (isset($location))
                            <form method="GET" action="{{ route('properties.byLocation', $location) }}"
                                class="search-form">
                                <select name="sort" onchange="this.form.submit()">
                                    <option value="">Sort By</option>
                                    <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest
                                    </option>
                                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest
                                    </option>
                                    <option value="price_high_to_low"
                                        {{ request('sort') == 'price_high_to_low' ? 'selected' : '' }}>Price High to Low
                                    </option>
                                    <option value="price_low_to_high"
                                        {{ request('sort') == 'price_low_to_high' ? 'selected' : '' }}>Price Low to High
                                    </option>
                                </select>
                                <input type="text" placeholder="Search by Property" />
                            </form>
                        @endif


                        @forelse ($properties as $project)
                            <img src="{{ asset('storage/' . $project->main_image) }}" class="property-image" />
                            <h4 class="property-price">AED {{ $project->price }}</h4>
                            {{-- <p class="property-det" style="color: white;">
                                {!! \Illuminate\Support\Str::limit($project->description, 10) !!}
                            </p> --}}

                            <div class="details">
                                @if ($project->bedrooms > 0)
                                    <div class="icons">
                                        <img src="{{ asset('/assets/images/projects/icon.png') }}" />
                                        {{ $project->bedrooms }}
                                    </div>
                                @endif

                                @if ($project->bathrooms > 0)
                                    <div class="icons">
                                        <img src="{{ asset('/assets/images/projects/icon.png') }}" />
                                        {{ $project->bathrooms }}
                                    </div>
                                @endif

                            </div>
                            <a href="{{ route('projects', $project->id) }}" class="viewdetails-btn mb-3">View Details</a>
                            <hr>
                        @empty
                            <p>
                                no project available
                            </p>
                        @endforelse
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
