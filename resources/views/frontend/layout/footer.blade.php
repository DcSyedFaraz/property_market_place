<style>
    /* Hide Google Translate header */
    #\:2\.container {
        display: none !important;
    }

    #\:0\.container {
        display: none !important;
    }

    #\:1\.container {
        display: none !important;
    }

    .goog-te-gadget-icon {
        display: none !important;
    }

    /* Adjust body position to avoid gap */
    body {
        top: 0px !important;
    }
</style>

<footer id="footer">
    <div class="container">
        <div class="row ms-2">
            <div class="col-md-4 first-col">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-footer02.png') }}" alt=""
                        class="footer-logo"></a>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi in nisi semper, vel
                    consectetur tellus ultricies.</p> --}}
                <div class="foter-social-logo mt-4 mb-4">
                    <a href="https://www.facebook.com/thehr.ae/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="https://x.com/TheHrealestate2" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <a href="https://www.instagram.com/thehr.ae/" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram-square"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/the-h-real-estate/" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    {{-- <a href="https://www.snapchat.com/add/thehr.ae" target="_blank" rel="noopener noreferrer">
                        <i class="fa-brands fa-square-snapchat"></i>
                    </a> --}}
                    <a href="https://www.youtube.com/channel/UC5LC_NCFImIkl0onSY65vXw" target="_blank"
                        rel="noopener noreferrer">
                        <i class="fa-brands fa-square-youtube"></i>
                    </a>

                </div>
            </div>
            <div class="col-md-3">
                <h3>{{ __('Get In Touch') }}</h3>
                <ul class="icon-text1">
                    <li>
                        <a href="https://www.google.com/maps/dir/?api=1&destination=Khalifa+Park+Area+-+Zone+1+-+Ministries+Complex+-+Abu+Dhabi"
                            target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p>{{ __('Khalifa Park Area - Zone 1 - Ministries Complex - Abu Dhabi') }}</p>
                        </a>
                    </li>

                    <li><a href="tel:022222040"><i class="bi bi-telephone-outbound-fill"></i> 022222040</a></li>
                    <li><a href="mailto:info@thehr.ae"><i class="bi bi-envelope"></i> info@thehr.ae</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>{{ __('Quick links') }}</h3>
                <ul>
                    <li><a href="{{ route('service') }}"><i class="bi bi-arrow-right-short"></i>{{ __('Services') }}</a>
                    </li>
                    <li><a href="{{ route('blog') }}"><i class="bi bi-arrow-right-short"></i>{{ __('Blogs') }}</a>
                    </li>
                    <li><a href="{{ route('properties.byLocation', 'Residential') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Residential') }}</a></li>
                    <li><a href="{{ route('properties.byLocation', 'Commercial') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Commercial') }}</a></li>
                    <li><a href="{{ route('properties.byLocation', 'Mall') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Mall') }}</a></li>
                    <li><a href="{{ route('properties.byLocation', 'Villa') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Villa') }}</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>{{ __('Contact us') }}</h3>
                <ul>
                    <li><a href="{{ route('contact_us') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Contact us') }}</a></li>
                    <li><a href="{{ route('complaint.form') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Complaint Form') }}</a>
                    </li>
                    <li><a href="{{ route('visitor.form') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Visitor Form') }}</a></li>
                    <li><a href="{{ route('registration.form') }}"><i
                                class="bi bi-arrow-right-short"></i>{{ __('Register as vendor') }}</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4 d-flex align-items-center ms-2">
            <div class="col-md-6">
                <h2>{{ __('Newsletter To Get Updated the Latest News') }}</h2>
            </div>
            <div class="col-md-6">
                <div class="news__form">
                    <input type="email" placeholder="{{ __('Enter your email address') }}" />
                    <button class="news__btn">{{ __('Subscribe Now') }}</button>
                </div>
            </div>
        </div>
        <div class="row copyright d-flex align-items-center mt-4">
            <div class="col-md-6">
                <p>{{ __('Copyright © 2025, All rights reserved.') }}</p>
            </div>
            <div class="col-md-6">
                <ul class="footer-privacy">
                    <li><a href="{{ route('term-condition') }}">{{ __('Terms of Service') }}</a></li>
                    <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                    <li><a href="#">{{ __('Cookies') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
