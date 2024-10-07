<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The H Real Estate</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>

    <!-- Nav-Bar -->
    <header class="header">
        <nav class="navbar navbar-light navbar-expand-lg">
            <div class="container d-block">
                <div class="row align-items-center">
                    <div class="col-md-2 col-6">
                        <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/image 10.png') }}"
                                alt="logo" class="logo"></a>
                    </div>
                    <div class="col-md-8 mob-1">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('secondary_sale') }}">Seconadry Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Holiday Homes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('offplan') }}">Off Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('new_articles') }}">News & Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">List your Property</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mob-1">
                        <a class="nav-link btn10" href="{{ route('login') }}">Contact us</a>
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
                                        src="{{ asset('assets/images/Bulldog-Stronger-logo.png') }}" alt="logo"
                                        class="logo"></a>
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
                            <img src="{{ asset('assets/img/testi-img.png') }}" alt="" />
                            <p>50+ Agents. See all listings.</p>
                        </div>
                    </div>
                    <div class="social-link mob-1">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
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
                                    Buy
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">
                                    Lease
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
                        <h2>Off plan Projects</h2>
                        <p>
                            New off-plan developments
                        </p>
                        <div class="owl-carousel service-carol owl-theme">
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Dubai') }}">
                                    <img src="{{ asset('assets/img/img01.png') }}" alt="Dubai" />
                                    <h4>Dubai</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Abu Dhabi') }}">
                                    <img src="{{ asset('assets/img/img02.png') }}" alt="Abu Dhabi" />
                                    <h4>Abu Dhabi</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Sharjah') }}">
                                    <img src="{{ asset('assets/img/img03.png') }}" alt="Sharjah" />
                                    <h4>Sharjah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Ras Al Khaimah') }}">
                                    <img src="{{ asset('assets/img/img04.png') }}" alt="Ras Al Khaimah" />
                                    <h4>Ras Al Khaimah</h4>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{ route('properties.byLocation', 'Ajman') }}">
                                    <img src="{{ asset('assets/img/img01.png') }}" alt="Ajman" />
                                    <h4>Ajman</h4>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
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
                            {{-- @dd($developer_properties) --}}
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
                                        {{-- <i class="fa fa-bath"><span>Bath 2</span></i> --}}
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
    </section>

    <!-- Sec 5 -->
    <section>
        <div class="sec-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="le5">
                            <h2 class="le-title">Browse by property type</h2>
                            <p class="card-text">
                                Handpicked projects for you
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="le5 align-items-center justify-content-end d-flex">
                            <a href="">All Properties</a>
                        </div>
                    </div>
                    <div class="owl-carousel service-carol owl-theme mt-4">
                        <div class="item">
                            <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                            <a href="#">
                                <h4>Dubai</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Abu Dhabi</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img03.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img04.png') }}" alt="" />
                            <a href="#">
                                <h4>Ras Al Khaimah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img01.png') }}" alt="" />
                            <a href="#">
                                <h4>Ajman</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
                            </a>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/img02.png') }}" alt="" />
                            <a href="#">
                                <h4>Sharjah</h4>
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
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod01.png') }}" alt="">
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
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="le6">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-6">
                                    <div class="le-img">
                                        <img src="{{ asset('assets/img/prod01.png') }}" alt="">
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
                </div>
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
        nav: true,
        responsive: {
            0: {
                items: 2
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
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 7
            }
        }
    })
</script>

<!-- Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>
