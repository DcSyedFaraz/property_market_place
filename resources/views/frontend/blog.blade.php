@extends('frontend.layout.app')
@section('content')
    <section class="banner">
        <div class="container">
            <h2 class="bannerh2">Blogs</h2>
        </div>
    </section>
    <section class="about-main">
        <div class="container">
            <div class="blog1">
                <h4 class="blog1-a">Blogs</h4>
                <p class="blog1-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod tellus vitae
                    posuere congue. Donec lacinia quam enim, sit amet varius tellus bibendum a. Duis varius lobortis
                    tortor, at semper.</p>
            </div>
            <div class="blog2">
                @foreach ($blogs as $blog)
                    <div class="blogs-inner">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="blog-img" />
                        <div class="content">
                            <h4 class="publish-date">{{ $blog->created_at }}</h4>
                            <h3 class="blog-title">{{$blog->title}}</h3>
                            <a href="{{ route('blog.show', $blog->slug) }}" class="blog-read">Read More</a>
                        

                        </div>
                    </div>
                @endforeach
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
