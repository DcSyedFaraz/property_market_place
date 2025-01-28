@extends('frontend.layout.app')
@section('content')
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Visitor Form</h1>
                    <p class="text-center"><a href="/">Home</a> / <a href="#">Visitor</a></p>
                </div>
            </div>
    </section>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header text-white" style="background-color:#007681">
                            <h4 class="mb-0">Submit a Request Of Visitor</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('visitor.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="property_type" class="form-label">Property Type</label>
                                    <select class="form-control" id="property_type" name="property_type">
                                        <option value="residential">Residential</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="off-plan">OFF-Plan</option>
                                        <option value="mall">Mall</option>
                                        <option value="villa">Villa</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="specifications" class="form-label">Specifications/Requirements</label>
                                    <textarea class="form-control" id="specifications" name="specifications" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="preferred_location" class="form-label">Preferred Location</label>
                                    <input type="text" class="form-control" id="preferred_location" name="preferred_location">
                                </div>
                                <div class="mb-3">
                                    <label for="budget_range" class="form-label">Budget Range</label>
                                    <input type="number" class="form-control" id="budget_range" name="budget_range">
                                </div>
                                 <!-- Submit Button -->
                                 <div class="d-grid">
                                    <button type="submit" style="background-color:#007681; border: #007681"
                                        class="btn btn-dark btn-lg">Submit Request</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include Bootstrap 5 JS and dependencies (Place before closing </body> tag) -->

    </div>
@endsection
