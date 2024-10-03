@extends('frontend.layouts.app')
@section('content')
<div class="detail">
    <div class="row">
        <div class="col-md-12">
                @foreach ($master_plans as $masplan)
                <div class="payment-detail">
                    <h3>{{ $masplan->name }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $masplan->image) }}" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>{{ $masplan->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
