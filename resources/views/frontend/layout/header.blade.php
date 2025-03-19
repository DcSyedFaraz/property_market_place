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
                             <a class="nav-link dropdown-toggle" href="#" id="propertiesDropdown" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">
                                 Properties
                             </a>
                             <ul class="dropdown-menu" aria-labelledby="propertiesDropdown">
                                 <li><a class="dropdown-item" href="#">Residential</a></li>
                                 <li><a class="dropdown-item" href="#">Commercial</a></li>
                                 <li><a class="dropdown-item" href="#">Off-Plan</a></li>
                                 <li><a class="dropdown-item" href="#">Mall</a></li>
                                 <li><a class="dropdown-item" href="#">Villa</a></li>
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
                     </ul>
                 </div>
                 <div class="col-md-2 mob-1">
                     <a class="nav-link btn10" href="{{ route('login') }}">Login</a>
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
 <!-- Floating Buttons Container -->
 <div class="floating-buttons">
     <!-- Visitor Button -->
     <div class="floating-button-container">
         <a href="{{ route('visitor.form') }}" class="floating-button visitor-button" target="_blank">
             <i class="fas fa-user"></i>
         </a>
         <span class="tooltip-text">Visitor Form</span>
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
