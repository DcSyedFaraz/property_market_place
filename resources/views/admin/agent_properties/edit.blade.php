@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Edit Property</h1>

        <form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Property Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Property Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $property->title }}"
                    required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description">{{ $property->description }}</textarea>
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <select class="form-control" id="location" name="location" required>
                    <option value="" hidden>Select a location</option>
                    @foreach (['Dubai', 'Abu Dhabi', 'Sharjah', 'Al Ain', 'Fujairah', 'Ras Al Khaimah'] as $locationOption)
                        <option value="{{ $locationOption }}"
                            {{ $property->location == $locationOption ? 'selected' : '' }}>
                            {{ $locationOption }}
                        </option>
                    @endforeach
                </select>
            </div>


            <!-- Property Type (Dropdown) -->
            <div class="mb-3">
                <label for="property_type" class="form-label">Property Type</label>
                <select class="form-control" id="property_type" name="property_type" required>
                    <option value="" hidden>Select Property Type</option>
                    <option value="Residential" {{ $property->property_type == 'Residential' ? 'selected' : '' }}>
                        Residential</option>
                    <option value="Commercial" {{ $property->property_type == 'Commercial' ? 'selected' : '' }}>Commercial
                    </option>
                    <option value="Off-Plan" {{ $property->property_type == 'Off-Plan' ? 'selected' : '' }}>Off-Plan
                    </option>
                    <option value="Mall" {{ $property->property_type == 'Mall' ? 'selected' : '' }}>Mall</option>
                    <option value="Villa" {{ $property->property_type == 'Villa' ? 'selected' : '' }}>Villa</option>
                </select>
            </div>

            <!-- Transaction Type (Checklist) -->
            <div class="mb-3">
                <label for="transaction_type" class="form-label">Transaction Type</label>
                <select class="form-control" id="transaction_type" name="transaction_type" required>
                    <option value="">Select Transaction Type</option>
                    <option value="Residential" {{ $property->transaction_type == 'Residential' ? 'selected' : '' }}>
                        Residential</option>
                    <option value="For Sale" {{ $property->transaction_type == 'For Sale' ? 'selected' : '' }}>For Sale
                    </option>
                </select>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" step=".01" name="price"
                    value="{{ $property->price }}" required>
            </div>

            <!-- Area (sq ft) -->
            <div class="mb-3">
                <label for="area" class="form-label">Area (sq ft)</label>
                <input type="number" class="form-control" id="area" name="area" value="{{ $property->area }}"
                    required>
            </div>

            <!-- Bedrooms -->
            <div class="mb-3">
                <label for="bedrooms" class="form-label">No. Bedrooms</label>
                <input type="number" class="form-control" id="bedrooms" name="bedrooms" value="{{ $property->bedrooms }}"
                    required>
            </div>

            <!-- Bathrooms -->
            <div class="mb-3">
                <label for="bathrooms" class="form-label">No. Bathrooms</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                    value="{{ $property->bathrooms }}" required>
            </div>

            <!-- Utility Area -->
            <div class="mb-3">
                <label for="utility_area" class="form-label">Utility Area</label>
                <input type="number" class="form-control" id="utility_area" value="{{ $property->utility_area }}"
                    name="utility_area">
            </div>

            <!-- Balcony Area -->
            <div class="mb-3">
                <label for="balcony_area" class="form-label">Balcony Area</label>
                <input type="number" class="form-control" id="balcony_area" value="{{ $property->balcony_area }}"
                    name="balcony_area">
            </div>

            <!-- Unit Area -->
            <div class="mb-3">
                <label for="unit_area" class="form-label">Unit Area</label>
                <input type="number" class="form-control" id="unit_area" value="{{ $property->unit_area }}"
                    name="unit_area">
            </div>

            <!-- Property Main Image -->
            @if ($property->main_image)
                <div class="mb-3">
                    <label for="main_image" class="form-label">Current Property Image</label>
                    <img src="{{ asset('storage/' . $property->main_image) }}" alt="Property Main Image"
                        class="img-thumbnail" width="150">
                </div>
            @endif

            <div class="mb-3">
                <label for="main_image" class="form-label">Upload New Property Image</label>
                <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*">
            </div>

            <!-- Property Gallery Images -->
            <div class="mb-3">
                <label for="gallery_images" class="form-label">Upload Property Gallery Images</label>
                <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple
                    accept="image/*">
            </div>

            <!-- Property Status (Dropdown) -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="available" {{ $property->status == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="sold" {{ $property->status == 'sold' ? 'selected' : '' }}>Sold</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Property</button>
        </form>
    </div>
@endsection
