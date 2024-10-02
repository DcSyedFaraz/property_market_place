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

                                <form action="{{ route('offplan') }}" method="GET">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Starting Price Range
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne">
                                                <div class="accordion-body Nospace">
                                                    <div class="price-input">
                                                        <div class="field">
                                                            <span>Min</span>
                                                            <input type="number" id="MinPriceId" class="input-min"
                                                                name="min_price"
                                                                value="{{ request()->input('min_price', $minPrice) }}">
                                                        </div>
                                                        <div class="separator">-</div>
                                                        <div class="field">
                                                            <span>Max</span>
                                                            <input type="number" id="MaxPriceId" class="input-max"
                                                                name="max_price"
                                                                value="{{ request()->input('max_price', $maxPrice) }}">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Filter</button>


                                                    </div>
                                                    <div class="slider">
                                                        <div class="progress"></div>
                                                    </div>
                                                    <div class="range-input">
                                                        <input type="range" class="range-min" min="61995"
                                                            max="330000000" value="61995" step="1000">
                                                        <input type="range" class="range-max" min="61995"
                                                            max="330000000" value="330000000" step="1000">
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
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Dubai
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Abu Dubai
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Sharjah
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Ras Al Khaimah
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Ajman
                                                        </label>
                                                    </div>
                                                    <h3>Communities</h3>
                                                    @foreach ($communities as $community)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault" checked>
                                                            <label class="form-check-label" for="flexCheckDefault">
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

                                                </div>
                                            </div>
                                        </div>



                                        <label for="Status">Status</label>
                                        <select class="form-select" id="status" name="status">
                                            <option value="status" selected>Status</option>
                                            @foreach ($developer_property as $dev_property)
                                            <option value="new" {{ $dev_property->status == 'new' ? 'selected' : '' }}>
                                                New Launch
                                            </option>
                                            <option value="under_construction" {{ $dev_property->status == 'under_construction' ? 'selected' : '' }}>
                                                Under Construction
                                            </option>
                                            <option value="ready_to_move" {{ $dev_property->status == 'ready_to_move' ? 'selected' : '' }}>
                                                Ready to Move
                                            </option>
                                            @endforeach
                                        </select>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Accommodation
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            1 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            2 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            3 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            4 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked" checked>
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            5 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            6 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            7 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            8 Bedroom
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckChecked">
                                                        <label class="form-check-label" for="flexCheckChecked">
                                                            Studio
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

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
                            @forelse ($projects as $project)
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
                        {{ $projects->links() }}


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
                    <div class="item"><img src="assets/img/logo01.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo02.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo03.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo04.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo01.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo02.png" alt="" /></div>
                    <div class="item"><img src="assets/img/logo03.png" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Carousel End -->
@endsection
