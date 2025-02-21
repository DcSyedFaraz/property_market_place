@extends('frontend.layout.app')
@section('content')
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">BLOG Detail</h1>
                    <p>lorem ipsum dolor sit amet consectetur adipiscing elit aenean luctus urna ut lorem</p>
                </div>
            </div>
    </section>
    <section>
        <div class="sec-serv-002 sec-space">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-md-8">
                        <div class="hello">
                            <div class="imgdiv">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid">
                            </div>
                            <div class="content">
                                <h2>{{ $blog->title }}</h2>
                                <p>{!! $blog->description !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
