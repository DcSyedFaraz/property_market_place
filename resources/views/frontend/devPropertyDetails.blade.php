<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Properties</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicons -->
    <link href="" rel="icon" />
    <link href="" rel="apple-touch-icon" />
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body class="view-properties-page page-id-101">
    <!-- Nav-Bar -->
    <header class="top-header mob-1">
        <nav class="navbar navbar-top">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-12 col-6">
                        <ul class="navbar-nav top-h1 me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Seconadry Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Holiday Homes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Off Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    {{-- @dd($developer_property) --}}
    <header class="header header-view">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-md-2 col-6">
                        <a class="navbar-brand" href="/"><img
                                src="{{ asset('storage/' . $developer_property->logo) }}" alt="logo"
                                class="logo" /></a>
                    </div>
                    <div class="col-md-8 mob-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Amenity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Payment Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Floor Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Master Plan </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gallery</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mob-1">
                        <a class="nav-link btn10" href="#">Get A Qoute</a>
                    </div>
                    <div class="col-6 d-md-none">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas"
                            tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <a class="navbar-brand" href="/"><img
                                        src="./assets/images/Bulldog-Stronger-logo.png" alt="logo"
                                        class="logo" /></a>
                                <button type="button" class="btn-close btn-close-white text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Bulldog Stronger</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Community</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="./marketplace.html">Marketplace</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Vet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="sec-01 bread-crumb"
        style="background-image: url('{{ asset('storage/' . $developer_property->cover_image) }}');">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{{ $developer_property->name }}</h1>
                </div>
            </div>
    </section>

    <section>
        <div class="sec-02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <!-- Left Side -->
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="ico-text">
                                            <p><i class="bi bi-house-add"></i> Home /
                                                {{ $developer_property->community_name->name ?? '' }}
                                                / {{ $developer_property->developer->name ?? '' }} /
                                                {{ $developer_property->name }} / Overview
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="btn10" href="#">Download Brochure</a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <h3>{{ $developer_property->name }}</h3>
                                    <p>By {{ $developer_property->developer->name ?? ''}} |
                                        {{ $developer_property->community_name->name ?? ''}}</p>
                                    @foreach ($developer_property->propertyTypes as $propertyType)
                                        <div class="row cardse1">
                                            <div class="col-md-4">
                                                <p><strong>Property Type:</strong> {{ $propertyType->property_type }}
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><strong>Unit type:</strong> {{ $propertyType->unit_type }}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <p><strong>Size:</strong> {{ $propertyType->size }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                    <h4>Direct Sales & 0% Commission</h4>
                                </div>
                                <div class="detail">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="le2">
                                                <h3>Overview</h3>
                                                <p>{{ $developer_property->description }}</p>
                                                <h3>Key Highlights:</h3>
                                                <ul>
                                                    @php
                                                        $keyHighlights = explode(
                                                            ',',
                                                            $developer_property->key_highlights,
                                                        );
                                                    @endphp
                                                    @forelse ($keyHighlights as $key_highlight)
                                                        <li>
                                                            {{ $key_highlight }}
                                                        </li>
                                                    @empty
                                                        <li> No highlights available.</li>
                                                    @endforelse

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail serv-icon10">
                                    <h3>Address Residences at {{ $developer_property->name }}</h3>
                                    <div class="row mt-4">
                                        @forelse ($developer_property->Amenity as $amenitiy)
                                            <div class="col-md-3">
                                                <div class="icon-with-text">
                                                    <img src="{{ asset('storage/' . $amenitiy->logo) }}"
                                                        alt="">
                                                    <h4>{{ $amenitiy->name }}</h4>
                                                    <p>{{ $amenitiy->description }}</p>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse

                                    </div>

                                    <div class="btn-sec mt-4 d-flex justify-content-center">
                                        <a href="#" class="btn10">Read More..</a>
                                    </div>

                                </div>

                                <div class="detail">
                                    <div class="textwithbtn">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6">
                                                <h2>Payment Plan</h2>
                                            </div>
                                            <div class="col-md-6 d-flex justify-content-end">
                                                <a href="#" class="btn10">Download Payment Plan</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div class="icon-with-text1">
                                                <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                                                <h4>{{ $developer_property->down_percentage }}%</h4>
                                                <p>Down Payment</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="icon-with-text1">
                                                <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                                                <h4>{{ $developer_property->construction_percentage }}%</h4>
                                                <p>During Construction</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="icon-with-text1">
                                                <img src="{{ asset('assets/img/pay01.png') }}" alt="">
                                                <h4>{{ $developer_property->handover_percentage }}%</h4>
                                                <p>On Handover</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-sec mt-4 d-flex justify-content-end">
                                        <a href="#" class="btn10">Read More..</a>
                                    </div>
                                </div>

                                <div class="detail map-locat1">
                                    <h2>Location Map</h2>
                                    <div class="map-inner mt-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="{{ asset('storage/' . $developer_property->location_map) }}"
                                                    alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    @forelse ($developer_property->locations as $location)
                                                        <div class="col-md-3">
                                                            <div class="icon-with-text20">
                                                                <img src="{{ asset('storage/' . $location->image) }}"
                                                                    alt="">
                                                                <h4>{{ $location->name }}</h4>
                                                                <p>{{ $location->pivot->distance }} minutes</p>
                                                                <!-- Print the distance from pivot table -->
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p>No locations found.</p>
                                                    @endforelse

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-sec mt-4 d-flex justify-content-end">
                                        <a href="#" class="btn10">Read More..</a>
                                    </div>
                                </div>
                                <div class="detail plan-master">
                                    <h2>Master Plan</h2>
                                    <div class="map-inner2 mt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-md-6">
                                                <img src="{{ asset('storage/' . $developer_property->master_plan_image) }}"
                                                    alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    @forelse ($developer_property->masterPlans as $masterPlan)
                                                        <div class="col-md-4">
                                                            <div class="icon-with-text201">
                                                                <p> <img src="{{ asset('storage/' . $masterPlan->image) }}"
                                                                        alt="">
                                                                    {{ $masterPlan->name }}</p>
                                                            </div>
                                                        </div>
                                                    @empty
                                                    @endforelse
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-sec mt-4 d-flex justify-content-end">
                                        <a href="#" class="btn10">Read More..</a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <h2>Floor Plan</h2>
                                    <div class="map-inner2">
                                        <div class="tables-data">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Floor Plan</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Unit Type</th>
                                                        <th scope="col">Floor Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($developer_property->floorPlans as $floorPlan)
                                                        <tr>
                                                            {{-- <td><img src="{{ $floorPlan->image}}"
                                                                    alt=""></td> --}}
                                                            <td><img src="{{ asset('storage/' . $floorPlan->image) }}"
                                                                    alt=""></td>
                                                            <td>{{ $floorPlan->category }}</td>
                                                            <td>{{ $floorPlan->unit_type }}</td>
                                                            <td>{{ $floorPlan->floor_details }}
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <p>no floor plans available</p>
                                                        </tr>
                                                    @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="btn-sec mt-4 d-flex justify-content-end">
                                        <a href="#" class="btn10">Read More..</a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <h2>Image Gallery</h2>
                                    <div class="gallery-inner">
                                        <div class="row">
                                            <div class="col-md-8">
                                                @if ($developer_property->images->count() > 0)
                                                    <img src="{{ asset('storage/' . $developer_property->images[0]->image) }}"
                                                        alt="">
                                                @else
                                                    <img src="{{ asset('assets/img/default.png') }}" alt="">
                                                @endif
                                            </div>
                                            <div class="col-md-4 d-flex flex-column gap-3">
                                                @foreach ($developer_property->images as $image)
                                                    <img src="{{ asset('storage/' . $image->image) }}"
                                                        alt="">
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Left Side -->

                            <!-- Right Side -->
                            <div class="col-md-4">
                                <div class="detail form-view-page">
                                    <h3>Get in Touch</h4>
                                        <form>
                                            <ul class="form-style-1">
                                                <li><label>Full Name <span class="required">*</span></label><input
                                                        type="text" name="field1" class="field-divided"
                                                        placeholder="First" /> <input type="text" name="field2"
                                                        class="field-divided" placeholder="Last" /></li>
                                                <li>
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email" name="field3" class="field-long" />
                                                </li>
                                                <li>
                                                    <label>Subject</label>
                                                    <select name="field4" class="field-select">
                                                        <option value="Advertise">Advertise</option>
                                                        <option value="Partnership">Partnership</option>
                                                        <option value="General Question">General</option>
                                                    </select>
                                                </li>
                                                <li>
                                                    <label>Your Message <span class="required">*</span></label>
                                                    <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
                                                </li>
                                                <li>
                                                    <input type="submit" value="Submit" />
                                                </li>
                                            </ul>
                                        </form>
                                </div>
                            </div>
                            <!-- End Right Side -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="view-sec-02 sec-space">
        <div class="similer-vail mt-4">
            <div class="container">
                <h2>Similar Availabilities in Resale Property</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card1">
                            <img src="{{ asset('assets/img/avial-img.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">1980000 Dhs</h5>
                                <ul class="card-detail">
                                    <li>1 Bedroom Apartment</li>
                                    <li>Al Ruwayyah, Dubai</li>
                                    <li>958 Sq. Ft.</li>
                                </ul>
                                <a class="btn-detail1" href="#">View Deatils</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card1">
                            <img src="{{ asset('assets/img/avial-img.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">1980000 Dhs</h5>
                                <ul class="card-detail">
                                    <li>1 Bedroom Apartment</li>
                                    <li>Al Ruwayyah, Dubai</li>
                                    <li>958 Sq. Ft.</li>
                                </ul>
                                <a class="btn-detail1" href="#">View Deatils</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card1">
                            <img src="{{ asset('assets/img/avial-img.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">1980000 Dhs</h5>
                                <ul class="card-detail">
                                    <li>1 Bedroom Apartment</li>
                                    <li>Al Ruwayyah, Dubai</li>
                                    <li>958 Sq. Ft.</li>
                                </ul>
                                <a class="btn-detail1" href="#">View Deatils</a>
                            </div>
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
                        <h2>Discover Modern New developments.</h2>
                        <p>Select your property type from our list of featured developers</p>
                    </div>
                </div>
                <div class="owl-carousel logo-carol owl-theme mt-4">
                    <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo04.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo01.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo02.png') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Logo Carousel End -->

    <!-- Footer Start -->
    <footer id="footer">
        <div class="container">
            <div class="row ms-2">
                <div class="col-md-4">
                    <a href="#"><img src="{{ asset('assets/img/logo-footer01.png') }}" alt=""></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi in nisi semper, vel
                        consectetur tellus ultricies.</p>
                    <div class="foter-social-logo mt-4 mb-4">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                        <a href="#"><i class="fab fa-instagram-square"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Get In Touch</h3>
                    <ul class="icon-text1">
                        <li><a href="#"><i class="bi bi-geo-alt-fill"></i>
                                <p>789 Inner Lane, Holy park,
                                    California, USA</p>
                            </a></li>
                        <li><a href="#"><i class="bi bi-telephone-outbound-fill"></i> +00 123 456 7890</a></li>
                        <li><a href="#"><i class="bi bi-envelope"></i> Thehrealestate,@support.com</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Useful Link</h3>
                    <ul>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> All Properties</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> All Authors</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Team</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Pricing</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Products</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> All Properties</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> All Authors</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Team</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Pricing</a></li>
                        <li><a href="#"><i class="bi bi-arrow-right-short"></i> Our Products</a></li>
                    </ul>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center ms-2">
                <div class="col-md-6">
                    <h2>Newsletter To Get Updated<br>
                        The Latest News</h2>
                </div>
                <div class="col-md-6">
                    <div class="news__form">
                        <input type="email" placeholder="Enter your email address" />
                        <button class="news__btn">Subscribe Now</button>
                    </div>
                </div>
            </div>
            <div class="row copyright d-flex align-items-center mt-4">
                <div class="col-md-6">
                    <p>Copyright © 2024, All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer-privacy">
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
