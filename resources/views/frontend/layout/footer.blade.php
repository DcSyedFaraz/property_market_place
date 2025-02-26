<footer id="footer">
    <div class="container">
        <div class="row ms-2">
            <div class="col-md-4 first-col">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-footer01.png') }}" alt="" class="footer-logo"></a>
                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nisi in nisi semper, vel
                    consectetur tellus ultricies.</p> --}}
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
