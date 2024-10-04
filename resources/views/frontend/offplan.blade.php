@extends('frontend.layout.app')
@section('content')
    <!-- Bread Crumb -->
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Offplan Projects</h1>
                    <p class="text-center"><a href="index.html">Home</a> / <a href="#">Offplan Projects</a></p>
                </div>
            </div>
    </section>
    <!-- Bread Crumb End -->
    <section>
        <div class="sec-community-003">
            <div class="container">
                <div class="row d-flex align-items-center list-mob1">
                    <div class="col-md-3 col-6">
                        <a href="{{ route('offplan') }}">
                            <div class="tab-item1 active_bar">
                                <i class="bi bi-building"></i>
                                <h4 class="text-center">Projects</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('developer_list') }}">
                            <div class="tab-item1">
                                <i class="bi bi-house"></i>
                                <h4 class="text-center">Developer</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('location') }}">
                            <div class="tab-item1">
                                <i class="bi bi-geo-alt"></i>
                                <h4 class="text-center">Location</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-6">
                        <a href="{{ route('project_community') }}">
                            <div class="tab-item1">
                                <i class="bi bi-hospital"></i>
                                <h4 class="text-center">Community</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-community-004 sec-space">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="detail">
                            <h2>Filter</h2>
                            <div class="filter-section">
                                <form action="{{ route('offplan_search') }}" method="GET">
                                    @csrf
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Starting Price Range
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordion-body">
                                                        <div class="price-input">
                                                            <div class="field">
                                                                <span>Min</span>
                                                                {{-- @dd(request('min_price')) --}}
                                                                <input type="number" id="MinPriceId" class="input-min"
                                                                    name="min_price" value="{{ request('min_price') }}">
                                                            </div>
                                                            <div class="separator">-</div>
                                                            <div class="field">
                                                                <span>Max</span>
                                                                <input type="number" id="MaxPriceId" class="input-max"
                                                                    name="max_price" value="{{ request('max_price') }}">
                                                            </div>

                                                        </div>
                                                        {{-- <div class="slider">
                                                            <div class="progress"></div>
                                                        </div>

                                                        <div class="range-input">
                                                            <input type="range" class="range-min" min="61995"
                                                                max="330000000" value="61995" step="1000">
                                                            <input type="range" class="range-max" min="61995"
                                                                max="330000000" value="330000000" step="1000">
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    City
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="city"
                                                            id="cityDubai" value="Dubai">
                                                        <label class="form-check-label" for="cityDubai">
                                                            Dubai
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="city"
                                                            id="cityAbuDhabi" value="Abu Dhabi"
                                                            {{ request('city') == 'Abu Dhabi' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="cityAbuDhabi">
                                                            Abu Dubai
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="city"
                                                            id="citySharjah" value="Sharjah">
                                                        <label class="form-check-label" for="citySharjah">
                                                            Sharjah
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="city"
                                                            id="cityRas Al Khaimah" value="Ras Al Khaimah">
                                                        <label class="form-check-label" for="cityRas Al Khaimah">
                                                            Ras Al Khaimah
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="city"
                                                            id="city Ajman" value="Ajman">
                                                        <label class="form-check-label" for="city Ajman">
                                                            Ajman
                                                        </label>
                                                    </div>
                                                    <h3>Communities</h3>
                                                    @foreach ($communities as $community)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                {{ is_array(request('communities')) && in_array($community->id, request('communities')) ? 'checked' : '' }}
                                                                name="communities[]" value="{{ $community->id }}"
                                                                id="community{{ $community->id }}">
                                                            <label class="form-check-label"
                                                                for="community{{ $community->id }}">
                                                                {{ $community->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Property Type
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyVilla" value="Villa">
                                                        <label class="form-check-label" for="propertyVilla">
                                                            Villa
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyApartment" value="Apartment">
                                                        <label class="form-check-label" for="propertyApartment">
                                                            Apartment
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Townhouse
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Mansion
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Sky Palaces
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Residential Plot
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Water Bungalows
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Hotel Rooms
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Duplex Apartments
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Penthouse
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Stand Alone Villa
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Semi Detached
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="property_type" id="propertyTownhouse" value="Townhouse">
                                                        <label class="form-check-label" for="propertyTownhouse">
                                                            Villa Plots
                                                        </label>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Developer
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @foreach ($developers as $developer)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="developers[]" value="{{ $developer->id }}"
                                                                id="developer{{ $developer->id }}"
                                                                {{ in_array($developer->id, request()->input('developers', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="developer{{ $developer->id }}">
                                                                {{ $developer->name }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <label for="Status">Status</label>
                                        <select class="form-select" id="status" name="status">
                                            @foreach ($developer_property as $dev_property)
                                                <option value="new"
                                                    {{ $dev_property->status == 'new' ? 'selected' : '' }}>
                                                    New Launch
                                                </option>
                                                <option value="under_construction"
                                                    {{ $dev_property->status == 'under_construction' ? 'selected' : '' }}>
                                                    Under Construction
                                                </option>
                                                <option value="ready_to_move"
                                                    {{ $dev_property->status == 'ready_to_move' ? 'selected' : '' }}>
                                                    Ready to Move
                                                </option>
                                            @endforeach
                                        </select>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Accommodation
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="1" id="accommodation1">
                                                        <label class="form-check-label" for="accommodation1">
                                                            1 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="2" id="accommodation2">
                                                        <label class="form-check-label" for="accommodation2">
                                                            2 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="3" id="accommodation3">
                                                        <label class="form-check-label" for="accommodation3">
                                                            3 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="4" id="accommodation4">
                                                        <label class="form-check-label" for="accommodation4">
                                                            4 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="5" id="accommodation5">
                                                        <label class="form-check-label" for="accommodation5">
                                                            5 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="6" id="accommodation6">
                                                        <label class="form-check-label" for="accommodation6">
                                                            6 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="7" id="accommodation7">
                                                        <label class="form-check-label" for="accommodation7">
                                                            7 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="8" id="accommodation8">
                                                        <label class="form-check-label" for="accommodation8">
                                                            8 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="accommodations[]" value="9" id="accommodation9">
                                                        <label class="form-check-label" for="accommodation9">
                                                            Studio
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="mt-4">Offplan Projects</h2>
                                    <form>
                                        <ul class="form-style-101">
                                            <li>
                                                <select name="field4" class="field-select">
                                                    <option value="Advertise">Sort By</option>
                                                    <option value="Partnership">Partnership</option>
                                                    <option value="General Question">General</option>
                                                </select>
                                            </li>
                                            <li>
                                                <input type="search"
                                                    placeholder="Search by property name...
                                                    "
                                                    name="field3" class="field-long" />
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            @forelse ($properties as $project)
                                <div class="row list-one my-2">
                                    <div class="property-item d-flex align-items-center">
                                        <div class="col-md-5">
                                            <div class="property-img">
                                                <img src="{{ asset('storage/' . $project->cover_image) }}" alt="property"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="property-desc">
                                                <h5 class="mt-4">AED {{ $project->price }} /</h5>
                                                <h4>{{ $project->name }} </h4>
                                                <h6>{{ $project->community_name->name ?? '' }} </h6>
                                                <div class="dt10">
                                                    <i class="fa fa-bed"><span>
                                                            {{ $project->propertyTypes->first()->unit_type }}</span></i>
                                                    <i class="fa fa-vector-square"><span>
                                                            {{ $project->propertyTypes->first()->size }} </span></i>
                                                </div>
                                                <div class="btn-04 mt-2">
                                                    <a href="{{ route('projects', $project->id) }}"><button
                                                            class="btn-05">View Details</button></a>
                                                    <a href="#"><button class="btn-05">Payment Plan</button></a>
                                                    <a href="#"><button class="btn-05">Handover</button></a>
                                                    <a href="#"><button class="btn-05">Brochure</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="row">
                                    <p>
                                        no project available
                                    </p>
                                </div>
                            @endforelse
                        </div>
                        {{ $properties->links() }}


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
                        <p>
                            Select your property type from our list of featured developers
                        </p>
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
