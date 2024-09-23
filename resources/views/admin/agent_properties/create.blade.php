@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Create Property</h1>

        <form action="{{ route('agentproperty.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="agent_id" class="form-label">Agent</label>
                <select class="form-control" id="agent_id" name="agent_id" required>
                    <option value="">Select Agent</option>
                    @foreach ($agents as $agent)
                        <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="col-12">
                <div class="">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description">{{ isset($agent) ? $agent->description : '' }}</textarea>
                </div>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Property Type</label>
                <select class="form-control" id="type" name="type" required>
                    <option value="">Select Property Type</option>
                    <option value="Apartment">Apartment</option>
                    <option value="Retail Space">Retail Space</option>
                    <option value="Villa">Villa</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step=".01" required>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Area (sq ft)</label>
                <input type="number" class="form-control" id="area" name="area" required>
            </div>

            <div class="mb-3">
                <label for="bedrooms" class="form-label">Bedrooms</label>
                <input type="number" class="form-control" id="bedrooms" name="bedrooms">
            </div>

            <div class="mb-3">
                <label for="bathrooms" class="form-label">Bathrooms</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms">
            </div>
            <div class="mb-3">
                <label for="utility_area" class="form-label">Utility Area</label>
                <input type="number" class="form-control" id="utility_area" name="utility_area">
            </div>
            <div class="mb-3">
                <label for="balcony_area" class="form-label">Balcony Area</label>
                <input type="number" class="form-control" id="balcony_area" name="balcony_area">
            </div>
            <div class="mb-3">
                <label for="unit_area" class="form-label">Unit Area</label>
                <input type="number" class="form-control" id="unit_area" name="unit_area">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Property Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="available" selected>Available</option>
                    <option value="sold">Sold</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Property</button>
        </form>
    </div>
@endsection
