@extends('frontend.layout.app')
@section('content')
<section class="blog-banner">
        <div class="container">
            <h2 class="bannerh2"></h2>
        </div>
    </section>
<section class="about-main">
        <div class="container">
            <div class="blog-inner">
                <div class="row">
                    <div class="col-md-12 col-lg-9 p-5">
                        <div class="blog-text">
                            <img src="{{asset('/storage/'.$blog->image)}}" class="blog-image" />
                            <h4 class="blog-a1">March 21,2025</h4>
                            <h3 class="blog-a2">{{$blog->title}}</h3>
							{!! $blog->description !!}
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="border-left">
							@foreach ($blogs as $blog)
                            <div class="blog-sidebar">
                                <img src="{{asset('/storage/'.$blog->image)}}" class="blogside-img" />
                                <h4 class="sidebar-a1">{!! substr($blog->title, 50, 10) !!}</h4>
                                <a href="{{ route('blog.show', $blog->id) }}" class="sidebar-btn">Read More</a>
                            </div>
							@endforeach

                        </div>
                    </div> -->
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
