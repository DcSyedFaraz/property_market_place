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
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-footer01.png') }}" alt=""
                        class="footer-logo"></a>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi in nisi semper, vel
                    consectetur tellus ultricies.</p> --}}
                <div class="foter-social-logo mt-4 mb-4">
                    <a href="https://www.facebook.com/thehr.ae/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://x.com/TheHrealestate2"><i class="fab fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/thehr.ae/"><i class="fab fa-instagram-square"></i></a>
                    <a href="https://www.linkedin.com/company/the-h-real-estate/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.snapchat.com/add/thehr.ae"><i class="fa-brands fa-square-snapchat"></i></a>
                    <a href="https://www.youtube.com/channel/UC5LC_NCFImIkl0onSY65vXw"><i class="fa-brands fa-square-youtube"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <h3>Get In Touch</h3>
                <ul class="icon-text1">
                    <li><a href="#"><i class="bi bi-geo-alt-fill"></i>
                            <p>Khalifa Park Area - Zone 1 - Ministries Complex - Abu Dhabi</p>
                        </a></li>
                    <li><a href="tel:022222040"><i class="bi bi-telephone-outbound-fill"></i> 022222040</a></li>
                    <li><a href="mailto:info@thehr.ae"><i class="bi bi-envelope"></i> info@thehr.ae</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Quick links</h3>
                <ul>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Services</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Blogs</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Residential</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Commercial</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Off-Plan</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Mall</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Villa</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Contact Us</h3>
                <ul>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Contact us</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Complaint</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Visitor</a></li>
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
                <p>Copyright © {{ now()->year }}, All rights reserved.</p>
            </div>
            <div class="col-md-6">
                <ul class="footer-privacy">
                    <li><a href="{{ route('term-condition') }}">Terms of service</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy policy</a></li>
                    <li><a href="#">Cookies</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ar',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE

        }, 'google_translate_element');
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Google Translate
        googleTranslateElementInit();

        // Show page and hide loading indicator
        document.getElementById('page').style.display = 'block';
        document.getElementById('loading').style.display = 'none';
    });
</script>
