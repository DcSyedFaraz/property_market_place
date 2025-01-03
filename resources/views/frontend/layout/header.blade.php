 <!-- Nav Bar -->
 <header class="header header-view1">
     <nav class="navbar navbar-light navbar-expand-lg">
         <div class="container d-block">
             <div class="row align-items-center">
                 <div class="col-md-2 col-6">
                     <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo-footer01.png') }}"
                             alt="logo" class="logo" /></a>
                 </div>
                 <div class="col-md-8 mob-1">
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('home') }}">Home</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('secondary_sale') }}">Secondary Properties </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('offplan') }}">Off Plan</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="#">Location</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('service') }}">Service</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('new_articles') }}">News & Articles</a>
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
                     <div class="offcanvas offcanvas-end bg-secondary secondary-1" id="navbarOffcanvas" tabindex="-1"
                         aria-labelledby="offcanvasNavbarLabel">
                         <div class="offcanvas-header">
                             <a class="navbar-brand" href="/"><img
                                     src="{{ asset('assets/img/logo-footer01.png') }}" alt="logo"
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
