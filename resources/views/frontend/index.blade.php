<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The H Real Estate</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo-footer01.png') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Bootstrap Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>

    <!-- Nav-Bar -->
    <header class="header">
        <nav class="navbar navbar-dark navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-md-2 col-6">
                        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/image 10.png') }}"
                                alt="logo" class="logo"></a>
                    </div>
                    <div class="col-md-8 col-lg-7 mob-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    About
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a class="dropdown-item" href="{{ route('about_us') }}">About</a></li>
                                    <li><a class="dropdown-item" href="{{ route('leadership') }}">Leaders</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="propertiesDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Properties
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="propertiesDropdown">
                                    <li><a class="dropdown-item"
                                            href="{{ route('properties.byLocation', 'Residential') }}">Residential</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('properties.byLocation', 'Commercial') }}">Commercial</a>
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('properties.byLocation', 'Off-Plan') }}">Off-Plan</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('properties.byLocation', 'Mall') }}">Mall</a></li>
                                    <li><a class="dropdown-item"
                                            href="{{ route('properties.byLocation', 'Villa') }}">Villa</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('blog') }}">Blogs</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Contact Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a class="dropdown-item" href="{{ route('contact_us') }}">Contact Us</a></li>
                                    <li><a class="dropdown-item" href="{{ url('complain') }}">Complaint</a></li>
                                    <li><a class="dropdown-item" href="{{ url('visitor') }}">Visitor</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('complain') }}">Complaint</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('visitor') }}">Visitor</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-lg-3 mob-1">
                        <a class="nav-link btn10" href="{{ route('login') }}">Login</a>
                        <div id="google_translate_element"></div>
                    </div>
                    <div class="col-6 col-md-10 d-lg-none d-md-block">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas"
                            tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <a class="navbar-brand" href="/"><img
                                        src="{{ asset('assets/img/image 10.png') }}" alt="logo"
                                        class="logo"></a>
                                <button type="button" class="btn-close btn-close-white text-reset"
                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                            <li><a class="dropdown-item" href="{{ route('about_us') }}">About</a></li>
                                            <li><a class="dropdown-item" href="{{ route('leadership') }}">Leaders</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="propertiesDropdown"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Properties
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="propertiesDropdown">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('properties.byLocation', 'Residential') }}">Residential</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('properties.byLocation', 'Commercial') }}">Commercial</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('properties.byLocation', 'Off-Plan') }}">Off-Plan</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('properties.byLocation', 'Mall') }}">Mall</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('properties.byLocation', 'Villa') }}">Villa</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('service') }}">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('blog') }}">Blogs</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Contact Us
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                            <li><a class="dropdown-item" href="{{ route('contact_us') }}">Contact Us</a></li>
                                            <li><a class="dropdown-item" href="{{ url('complain') }}">Complaint</a></li>
                                            <li><a class="dropdown-item" href="{{ url('visitor') }}">Visitor</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link btn10" href="{{ route('login') }}">Login</a>
                                        <div id="google_translate_element"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section>
        <div class="sec-1 hero">
            <div class="row">
                <div class="container">
                    <div class="col-lg-8">
                        <h1>Modern Apartments Exclusive Listing</h1>
                        <p>
                            Get the features you in all the property we offer with the best
                            price you can get
                        </p>
                        <div class="img-text">
                            <a href="{{ route('leadership') }}">
                                <img src="{{ asset('assets/img/testi-img.png') }}" alt="Your Image Description" />
                            </a>
                            <p>Meet our Leaders.</p>
                        </div>
                    </div>
                    <div class="social-link mob-1">
                        <a href="https://www.facebook.com/thehr.ae/"><i class="bi bi-facebook"></i></a>
                        <a href="https://x.com/TheHrealestate2"><i class="bi bi-twitter"></i></a>
                        <a href="https://www.instagram.com/thehr.ae/"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/the-h-real-estate/"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.snapchat.com/add/thehr.ae"><i class="bi bi-snapchat"></i></a>
                        <a href="https://www.youtube.com/channel/UC5LC_NCFImIkl0onSY65vXw"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form10">
                            <h3>WHAT ARE YOU LOOKING FOR?</h3>
                            <p>(Easily find the house of your choice)</p>
                        </div>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">
                                    Rent
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">
                                    Buy
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <form action="" id="state-form">
                                    <select class="f1">
                                        <option value="">Property Type</option>
                                        <option value="">Property Type 1</option>
                                    </select>

                                    <select class="f2">
                                        <option value="">
                                            City Neighbourhood, Community
                                        </option>
                                        <option value="">City Neighbourhood</option>
                                    </select>

                                    <button class="button has-icon icon-send">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="tab-pane" id="profile">
                                <form action="" id="state-form"></form>
                                <select class="f1">
                                    <option value="">Property Type</option>
                                    <option value="">Property Type 1</option>
                                </select>

                                <select class="f2">
                                    <option value="">
                                        City Neighbourhood, Community
                                    </option>
                                    <option value="">City Neighbourhood</option>
                                </select>

                                <button class="button has-icon icon-send">
                                    <i class="bi bi-search"></i>
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="sec-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 me-auto text-center content1">
                        <h2>Our Properties</h2>
                        <p>
                            New Properties
                        </p>
                        <div class="owl-carousel service-carol owl-theme">
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Abu Dhabi') }}">
                                    <img src="{{ asset('assets/img/Abu Dhabi.webp') }}" alt="Abu Dhabi" />
                                    <h4>Abu Dhabi</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Dubai') }}">
                                    <img src="{{ asset('assets/img/dubai.webp') }}" alt="Dubai" />
                                    <h4>Dubai</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Al Ain') }}">
                                    <img src="{{ asset('assets/img/Al Ain.webp') }}" alt="Al Ain" />
                                    <h4>Al Ain</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Sharjah') }}">
                                    <img src="{{ asset('assets/img/Sharjah.webp') }}" alt="Sharjah" />
                                    <h4>Sharjah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Fujairah') }}">
                                    <img src="{{ asset('assets/img/Fujairah.webp') }}" alt="Fujairah" />
                                    <h4>Fujairah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Ras Al Khaimah') }}">
                                    <img src="{{ asset('assets/img/Ras Al Khaimah.webp') }}" alt="Ras Al Khaimah" />
                                    <h4>Ras Al Khaimah</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section>
        <div class="sec-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="le1">
                            <h2 class="le-title">New developments</h2>
                            <p class="card-text">
                                Take a look at new off-plan developments in and around Dubai
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le2 align-items-center justify-content-end d-flex">
                            <a href="{{ route('offplan') }}">All Properties</a>
    </div>
    </div>
    </div>

    <div class="row mt-4">
        @forelse ($developer_properties as $property)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('storage/' . $property->cover_image) }}" class="card-img-top"
                    alt="{{ $property->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $property->name }}</h5>
                    <p class="card-text">
                        {{ $property->description }}
                    </p>
                    <h6 class="price0">{{ $property->price }} AED</h6>
                    <div class="serv-icon mt-4">
                        <i class="fa fa-bed"><span>Bed
                                {{ $property->propertyTypes->first()->unit_type }}</span></i>
                        <i class="fa fa-vector-square"><span>{{ $property->propertyTypes->first()->size }}
                                sqft</span></i>
                    </div>
                    <div class="det d-flex align-items-center mt-4">
                        <p>{{ $property->community_name->name ?? '' }} </p>
                        <a href="{{ route('projects', $property->id) }}">Details</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">
            no property available
        </p>
        @endforelse

    </div>
    </div>
    </div>
    </section> --}}

    <!-- Sec 5 -->
    <section>
        <div class="sec-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-7">
                        <div class="le5">
                            <h2 class="le-title">Browse by property type</h2>
                            <p class="card-text">
                                Handpicked projects for you
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-5">
                        <div class="le5 align-items-center justify-content-end d-flex">
                            <a href="">All Properties</a>
                        </div>
                    </div>
                    <div class="owl-carousel type-carol owl-theme mt-4">
                        <div class="item">
                            <img src="{{ asset('assets/img/Residential.webp') }}" alt="" />
                            <a href="{{ route('properties.byLocation', 'Residential') }}">
                                <h4>Residential</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/commercial.webp') }}" alt="" />
                            <a href="{{ route('properties.byLocation', 'Commercial') }}">
                                <h4>Commercial</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/Off-Plan.webp') }}" alt="" />
                            <a href="{{ route('properties.byLocation', 'Off-Plan') }}">
                                <h4>Off-Plan</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/mall.webp') }}" alt="" />
                            <a href="{{ route('properties.byLocation', 'Mall') }}">
                                <h4>Mall</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/villa.webp') }}" alt="" />
                            <a href="{{ route('properties.byLocation', 'Villa') }}">
                                <h4>Villa</h4>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="sec-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod01.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        {{-- <span>Find, Buy & Own Your Dream Home</span> --}}
                                        <h2>Buy your own</h2>
                                        <p>Apartments and villas.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        {{-- <span>Find, Buy & Own Your Dream Home</span> --}}
                                        <h2>Buy your own</h2>
                                        <p>Shops and warehouse.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod-1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        {{-- <span>Find, Buy & Own Your Dream Home</span> --}}
                                        <h2>Renting made easy</h2>
                                        <p>Rental Properties - in Al Fujairah, Al Raha Gradens, Baniyas, Al Garhoud.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod02.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="le-conte">
                                        <span>Find, Buy & Own Your Dream Home</span>
                                        <h2>Buy a home</h2>
                                        <p>Explore Apartments, Villas, Penthouses, Mansions and more at service.</p>
                                        <a href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        </div>
    </section>

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
                    <div class="item"><img src="{{ asset('assets/img/Aldar Logo.webp') }}" alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/Azizi Profile Logo.webp') }}" alt="">
                    </div>
                    <div class="item"><img src="{{ asset('assets/img/Dubai properties Logo.webp') }}"
                            alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/Ellington Logo.webp') }}" alt="">
                    </div>
                    <div class="item"><img src="{{ asset('assets/img/Emaar Properties Logo.webp') }}"
                            alt=""></div>
                    <div class="item"><img src="{{ asset('assets/img/Meraas Logo.webp') }}" alt=""></div>
                    {{-- <div class="item"><img src="{{ asset('assets/img/logo03.png') }}" alt="">
                </div> --}}
            </div>
        </div>
        </div>

    </section>
    @include('frontend.layout.footer')

</body>

<!-- JS Files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $('.service-carol').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    })
    $('.type-carol').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<script>
    $('.logo-carol').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 3,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })
</script>
<!-- Floating Buttons Container -->
<div class="floating-buttons">
    <!-- Visitor Button -->
    <div class="floating-button-container">
        <a href="{{ route('visitor.form') }}" class="floating-button visitor-button" target="_blank">
            <i class="fas fa-user"></i>
        </a>
        <span class="tooltip-text">Visitor Form</span>
    </div>
    <div class="floating-button-container">
        <a href="{{ route('registration.form') }}" class="floating-button vendor-button" target="_blank">
            <i class="fas fa-store"></i>
        </a>
        <span class="tooltip-text">Register as a Vendor</span>
    </div>

    <!-- Complaint Button -->
    <div class="floating-button-container">
        <a href="{{ route('complaint.form') }}" class="floating-button complaint-button" target="_blank">
            <i class="fas fa-exclamation-circle"></i>
        </a>
        <span class="tooltip-text">Complaint Form</span>
    </div>
</div>

<!-- Styles for Buttons & Hover Effect -->
<style>
    /* Container for floating buttons */
    .floating-buttons {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 9;
        /* Space between buttons */
    }

    /* Individual button container */
    .floating-button-container {
        position: relative;
        display: flex;
        align-items: center;
    }

    /* Floating button design */
    .floating-button {
        background-color: #1c2d37;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 24px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .floating-button:hover {
        background-color: #15232d;
    }

    .floating-button i {
        font-size: 24px;
        color: white;
        /* Icon remains white */
    }

    /* Tooltip text */
    .tooltip-text {
        position: absolute;
        right: 60px;
        background-color: white;
        color: #15232d;
        /* Text color set to #15232d */
        padding: 5px 10px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: bold;
        white-space: nowrap;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* Show tooltip on hover */
    .floating-button-container:hover .tooltip-text {
        opacity: 1;
        visibility: visible;
    }
</style>

<!-- Font Awesome for Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</html>
