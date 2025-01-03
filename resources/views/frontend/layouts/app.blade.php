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
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('secondary_sale') }}">Seconadry Properties</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">Holiday Homes</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('offplan') }}">Off Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('service') }}">Services</a>
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
                                <a class="nav-link" href="{{ route('projects', $developer_property->id) }}">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('address_residence', $developer_property->id) }}">Amenity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('payment_plan', $developer_property->id) }}">Payment
                                    Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('floor_plan', $developer_property->id) }}">Floor
                                    Plans</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('location_map', $developer_property->id) }}">Location</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('master_plan', $developer_property->id) }}">Master
                                    Plan </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ route('projects', $developer_property->id) }}#gallery">Gallery</a>
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
                                        <a class="nav-link active" href="/">Home</a>
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
                            <div class="col-md-8">

                                @yield('content')
                            </div>
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
    @php
        $footerItems = app\Models\DeveloperProperty::where('developer_id', $developer_property->developer_id)
            ->latest()
            ->take(3)
            ->get();
    @endphp
    <section class="view-sec-02 sec-space">
        <div class="similer-vail mt-4">
            <div class="container">
                <h2>Similar Availabilities in Resale Property</h2>
                <div class="row mt-4">
                    @foreach ($footerItems as $footerItem)
                        <div class="col-md-4">
                            <div class="card1">
                                <img src="{{ asset('storage/' . $footerItem->cover_image) }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $footerItem->price }} AED</h5>
                                    <ul class="card-detail">
                                        <li>Bed
                                            {{ $footerItem->propertyTypes->first()->unit_type }}</li>
                                        <li>{{ $footerItem->community_name->name ?? '' }}</li>
                                        <li>{{ $footerItem->propertyTypes->first()->size }} Sq. Ft.</li>
                                    </ul>
                                    <a class="btn-detail1" href="{{ route('projects', $footerItem->id) }}">View
                                        Deatils</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
