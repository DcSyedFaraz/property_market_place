@extends('frontend.layout.app')
@section('content')
    <section class="sec-001 bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Complain Form</h1>
                    <p class="text-center"><a href="/">Home</a> / <a href="#">Complain</a></p>
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
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Submit a Complaint</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('complaint.submit') }}" method="POST">
                                @csrf

                                <!-- Tenant Full Name -->
                                <div class="row mb-4">
                                    <label class="col-sm-3 col-form-label">Tenant Full Name <span
                                            class="text-danger">*</span></label>
                                    <div class="col-sm-4">
                                        <input type="text" name="first_name"
                                            class="form-control @error('first_name') is-invalid @enderror"
                                            placeholder="First Name" value="{{ old('first_name') }}" required>
                                        @error('first_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="last_name"
                                            class="form-control @error('last_name') is-invalid @enderror"
                                            placeholder="Last Name" value="{{ old('last_name') }}" required>
                                        @error('last_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Contact Information -->
                                <div class="mb-4">
                                    <h5>Contact Information</h5>
                                    <hr>
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone_number"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            placeholder="e.g., +001 50 123 4567" value="{{ old('phone_number') }}" required>
                                        @error('phone_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="you@example.com" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Residence Details -->
                                <div class="mb-4">
                                    <h5>Residence Details</h5>
                                    <hr>
                                    <div class="mb-3">
                                        <label class="form-label">Building / Villa <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="building_villa"
                                            class="form-control @error('building_villa') is-invalid @enderror"
                                            placeholder="Building or Villa Name" value="{{ old('building_villa') }}"
                                            required>
                                        @error('building_villa')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Flat No. <span class="text-danger">*</span></label>
                                        <input type="text" name="flat_no"
                                            class="form-control @error('flat_no') is-invalid @enderror"
                                            placeholder="Flat Number" value="{{ old('flat_no') }}" required>
                                        @error('flat_no')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Complaint Details -->
                                <div class="mb-4">
                                    <h5>Complaint Details</h5>
                                    <hr>
                                    <div class="mb-3">
                                        <label class="form-label">Complaint Category <span
                                                class="text-danger">*</span></label>
                                        <div class="row">
                                            @php
                                                $complaints = [
                                                    'Air Conditioner',
                                                    'Electricity Issue',
                                                    'Water Issue',
                                                    'Gas Issue',
                                                    'Cleaning Issue',
                                                    'Parking',
                                                    'Security',
                                                    'Civil Defence',
                                                    'General Maintenance',
                                                    'Swimming Pool Issue',
                                                    'Other Complains',
                                                ];
                                            @endphp
                                            @foreach ($complaints as $complaint)
                                                <div class="col-md-6 mb-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="complaint"
                                                            value="{{ $complaint }}"
                                                            id="{{ strtolower(str_replace(' ', '_', $complaint)) }}"
                                                            {{ old('complaint') == $complaint ? 'checked' : '' }} required>
                                                        <label class="form-check-label"
                                                            for="{{ strtolower(str_replace(' ', '_', $complaint)) }}">
                                                            {{ $complaint }}
                                                        </label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('complaint')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" name="email_flat_tenant"
                                            id="email_flat_tenant" {{ old('email_flat_tenant') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="email_flat_tenant">Email Flat Tenant</label>
                                    </div> --}}

                                    <div class="mb-3">
                                        <label class="form-label">Complaint Details <span
                                                class="text-danger">*</span></label>
                                        <textarea name="complaint_details" class="form-control @error('complaint_details') is-invalid @enderror"
                                            rows="5" placeholder="Describe your complaint in detail..." required>{{ old('complaint_details') }}</textarea>
                                        @error('complaint_details')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Suggestion (Optional)</label>
                                        <textarea name="suggestion" class="form-control @error('suggestion') is-invalid @enderror" rows="3"
                                            placeholder="Any suggestions to improve our services...">{{ old('suggestion') }}</textarea>
                                        @error('suggestion')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success btn-lg">Submit Complaint</button>
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
