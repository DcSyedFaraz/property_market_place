@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Add New Property</h1>

        <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <!-- Property Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Property Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <select class="form-control" id="location" name="location" required>
                    <option value="" hidden>Select a location</option>
                    @foreach (['Dubai', 'Abu Dhabi', 'Sharjah', 'Al Ain', 'Fujairah', 'Ras Al Khaimah'] as $locationOption)
                        <option value="{{ $locationOption }}" {{ old('location') == $locationOption ? 'selected' : '' }}>
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
                    <option value="Residential" {{ old('property_type') == 'Residential' ? 'selected' : '' }}>Residential
                    </option>
                    <option value="Commercial" {{ old('property_type') == 'Commercial' ? 'selected' : '' }}>Commercial
                    </option>
                    <option value="Off-Plan" {{ old('property_type') == 'Off-Plan' ? 'selected' : '' }}>Off-Plan</option>
                    <option value="Mall" {{ old('property_type') == 'Mall' ? 'selected' : '' }}>Mall</option>
                    <option value="Villa" {{ old('property_type') == 'Villa' ? 'selected' : '' }}>Villa</option>
                </select>
            </div>

            <!-- Transaction Type (Checklist) -->
            <div class="mb-3">
                <label for="transaction_type" class="form-label">Transaction Type</label>
                <select class="form-control" id="transaction_type" name="transaction_type" required>
                    <option value="">Select Transaction Type</option>
                    <option value="Rent" {{ old('transaction_type') == 'Rent' ? 'selected' : '' }}>
                        Rent</option>
                    {{-- <option value="For Sale" {{ old('transaction_type') == 'For Sale' ? 'selected' : '' }}>For Sale
                    </option> --}}
                </select>
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" step=".01" name="price"
                    value="{{ old('price') }}" required>
            </div>

            <!-- Area (sq meter) -->
            <div class="mb-3">
                <label for="area" class="form-label">Area (sq meter)</label>
                <input type="number" class="form-control" id="area" name="area" step="0.01"
                    value="{{ old('area') }}" required>
            </div>

            <!-- Bedrooms -->
            <div class="mb-3">
                <label for="bedrooms" class="form-label">No. Bedrooms</label>
                <input type="number" class="form-control" id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}"
                    required>
            </div>

            <!-- Bathrooms -->
            <div class="mb-3">
                <label for="bathrooms" class="form-label">No. Bathrooms</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}"
                    required>
            </div>

            <!-- Utility Area -->
            <div class="mb-3">
                <label for="utility_area" class="form-label">Utility Area</label>
                <input type="number" class="form-control" step="0.01" id="utility_area" value="{{ old('utility_area') }}"
                    name="utility_area">
            </div>

            <!-- Balcony Area -->
            <div class="mb-3">
                <label for="balcony_area" class="form-label">Balcony Area</label>
                <input type="number" class="form-control" step="0.01" id="balcony_area" value="{{ old('balcony_area') }}"
                    name="balcony_area">
            </div>

            <!-- Unit Area -->
            <div class="mb-3">
                <label for="unit_area" class="form-label">Unit Area</label>
                <input type="number" class="form-control" step="0.01" id="unit_area" value="{{ old('unit_area') }}"
                    name="unit_area">
            </div>

            <!-- Property Main Image -->
            <div class="mb-3">
                <label for="main_image" class="form-label">Upload Property Image</label>
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
                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                    <option value="sold" {{ old('status') == 'sold' ? 'selected' : '' }}>Sold</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add Property</button>
        </form>
    </div>
@endsection
