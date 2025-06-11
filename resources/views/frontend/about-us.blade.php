@extends('frontend.layout.app')
@section('content')

<style>
    ul {
        color: white;
    }
</style>
<!-- Bread Crumb End -->
<section class="banner">
    <div class="container">
        <h2 class="bannerh2">About Us</h2>
    </div>
</section>
<section class="about-main">
    <div class="container-fluid">
        <div class="about1">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (7).jpg') }}" alt="about1" class="about1-img" />
                </div>
                <div class="col-md-6">
                    <p class="about1c">The H Real Estate Company is one of the most reputable and trusted companies established in the United Arab Emirates. With years of experience in project management throughout the country. We offer professional and reliable services that focus on finding the most suitable property for our clients. With our expertise, you can trust that you will be in the best place to find the perfect property. We strive to exceed your expectations, innovate creative solutions, and meet all your requirements, whether you are looking for a luxurious and comfortable space or an affordable option, we will provide exactly what you need.</p>
                </div>
            </div>
        </div>
        <div class="about2">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="about1b">Who We Are</h3>
                    <p class="about1c">The H Real Estate Company is one of the most reputable and trusted companies established in the United Arab Emirates, with years of experience in project management through out the country . In addition , We offer professional and reliable services that focus on finding the most suitable property for our clients. With our expertise, you can trust that you will be in the best place to find the perfect property. We strive to exceed your expectations, innovate creative solutions, and meet all your requirements, whether you are looking for a luxurious and comfortable space or an affordable option, we will provide exactly what you need.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (1).jpg') }}" alt="about1" class="about2-img" />
                </div>
            </div>
        </div>
        <div class="about1">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (2).jpg') }}" alt="about1" class="about1-img" />
                </div>
                <div class="col-md-6">
                    <h3 class="about1b">Our services include</h3>
                    <ul>
                        <li>Commercial and residential property management</li>
                        <li>Property owner services</li>
                        <li>Sales and leasing services</li>
                        <li>Facilities management</li>
                        <li>Real estate brokerage</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about2">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="about1b">Our Goal</h3>
                    <p class="about1c">To provide our clients with an exceptional and distinctive experience when buying or selling properties. We strive diligently to achieve our clients’ visions and aspirations by offering high-quality properties, superior services, and innovative designs.
                        We prioritize providing expert consultations and comprehensive supports to our clients throughout the buying or selling process, ensuring a comfortable and successful experience for them.
                        We always aim to build long-term relationships with our clients, based on transparency and integrity in our dealings, while striving to achieve their utmost satisfaction.
                        We are committed to excellence and innovation, continuously seeking improvements in the real estate sector and contributing to enhancing the quality of life for our clients and the community as a whole.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (3).jpg') }}" alt="about1" class="about2-img" />
                </div>
            </div>
        </div>
        <div class="about1">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (4).jpg') }}" alt="about1" class="about1-img" />
                </div>
                <div class="col-md-6">
                    <h3 class="about1b">Vision</h3>
                    <p class="about1c">Delighting our customers by providing boundless real estate quality is our ultimate goal. Real estate quality stands as one of the most critical criteria sought after by customers and investors when choosing a property for purchase or investment. Our dedication to real estate quality reflects our commitment to delivering properties with high standards, unique designs, and exceptional services.</p>
                </div>
            </div>
        </div>
        <div class="about2">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="about1b">Mission</h3>
                    <p class="about1c">We strive diligently to fulfil the visions and aspirations of our clients by providing high-quality properties, superior services, and innovative designs. We are committed to offering expert consultations and comprehensive support to our clients throughout the buying or selling process, building long-term relationships based on transparency, integrity in our transactions, and the pursuit of complete satisfaction.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (5).jpg') }}" alt="about1" class="about2-img" />
                </div>
            </div>
        </div>
        <div class="about1">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/about/about (6).jpg') }}" alt="about1" class="about1-img" />
                </div>
                <div class="col-md-6">
                    <h3 class="about1b">Why Choose Us</h3>
                    <ul>
                        <li>Wide range of properties in Prime locations to choose from.</li>
                        <li>Partnership to various well-known developers across the UAE and others parts of the world.</li>
                        <li>Maximum customer satisfaction guaranteed.</li>
                        <li>Full exposure specially in digital media to reach the target market.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-3">
            <div class="container">
                <h3 class="about3a">Be the first to know.</h3>
                <p class="about3b">We invite you to register below and we’ll be in touch with exclusive updates and
                    announcements about pre-leasing opportunities.</p>
                <form>
                    <input type="email" placeholder="Enter Your Email Address" name="email" />
                    <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
