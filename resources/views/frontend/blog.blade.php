@extends('frontend.layout.app')
@section('content')
<section class="blogs-one">


    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">NEWS AND BLOG</h1>
            <p>lorem ipsum dolor sit amet consectetur adipiscing elit aenean luctus urna ut lorem</p>
        </div>
            </div>
    </section>
    <section>
        <div class="sec-serv-002 sec-space">
            <div class="container">
            <div class="row align-items-center">
                @foreach ($blogs as $blog)
                <div class="col-md-4 px-4">
                    <div class="blogss">
                        <a href="{{ route('blog.show', $blog->id) }}">
                            <img src="{{ asset('storage/' . $blog->image) }}" width="400" alt="">
                            <div class="author">
                                <p class="redtxt">{{ $blog->title }}</p>
                                <p>20 Dec 2024</p>
                                <p><i class="fa-light fa-messages"></i> 280</p>
                                <p><i class="fa-light fa-heart"></i> 89</p>
                            </div>
                            <p>{!! substr($blog->description, 100,10) !!}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection
