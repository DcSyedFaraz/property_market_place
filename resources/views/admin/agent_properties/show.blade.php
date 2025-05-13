@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>{{ $property->title }}</h1>

        <div class="mb-3">
            <label>Location:</label>
            <p>{{ $property->location }}</p>
        </div>

        <div class="mb-3">
            <label>Price:</label>
            <p>AED {{ number_format($property->price, 2) }}</p>
        </div>

        <div class="mb-3">
            <label>Area (sq meter):</label>
            <p>{{ $property->area }}</p>
        </div>

        <div class="mb-3">
            <label>Bedrooms:</label>
            <p>{{ $property->bedrooms ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <label>Bathrooms:</label>
            <p>{{ $property->bathrooms ?? 'N/A' }}</p>
        </div>

        <div class="mb-3">
            <label>Description:</label>
            <p>{!! $property->description !!}</p>
        </div>

        @if ($property->image)
            <div class="mb-3">
                <label>Property Image:</label>
                <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="img-fluid">
            </div>
        @endif

        <div class="mb-3">
            <label>Status:</label>
            <p>{{ ucfirst($property->status) }}</p>
        </div>

        <a href="{{ route('property.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
