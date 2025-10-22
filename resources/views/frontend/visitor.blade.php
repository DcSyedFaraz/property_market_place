@extends('frontend.layout.app')
@section('title', 'The H Real Estate | Visitor Form')
@section('content')
    <section class="sec-001 bread-crumb"
        style="background-image: url('{{ asset('assets/images/about/visitor banner.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">{{ __('Visitor Form') }}</h1>
                    <p class="text-center"><a href="/">{{ __('Home') }}</a> / <a
                            href="#">{{ __('Visitor Form') }}</a></p>
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
                            <h4 class="mb-0">{{ __('Submit a Request of Visitor') }}</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('visitor.submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">{{ __('Phone Number') }}</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">{{ __('Nationality') }}</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality" required>
                                </div>
                                <div class="mb-3">
                                    <label for="property_type" class="form-label">{{ __('Property Type') }}</label>
                                    <select class="form-select" id="property_type" name="property_type">
                                        <option value="residential">{{ __('Residential') }}</option>
                                        <option value="commercial">{{ __('Commercial') }}</option>
                                        <option value="off-plan">{{ __('Off-Plan') }}</option>
                                        <option value="mall">{{ __('Mall') }}</option>
                                        <option value="villa">{{ __('Villa') }}</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="specifications"
                                        class="form-label">{{ __('Specifications/Requirements') }}</label>
                                    <textarea class="form-control" id="specifications" name="specifications" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="preferred_location"
                                        class="form-label">{{ __('Preferred Location') }}</label>
                                    <input type="text" class="form-control" id="preferred_location"
                                        name="preferred_location">
                                </div>
                                <div class="mb-3">
                                    <label for="budget_range" class="form-label">{{ __('Budget Range') }}</label>
                                    <input type="number" class="form-control" id="budget_range" name="budget_range">
                                </div>
                                <div class="mb-3">
                                    <label for="payment_for_rent" class="form-label">{{ __('Payment for the rent is for') }}</label>
                                    <select class="form-select" id="payment_for_rent" name="payment_for_rent" required>
                                        <option value="Personal">{{ __('Personal') }}</option>
                                        <option value="Company">{{ __('Company') }}</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="number_of_family_members" class="form-label">{{ __('Number of Family Members') }}</label>
                                    <input type="number" class="form-control" id="number_of_family_members" name="number_of_family_members" min="0">
                                </div>
                                <div class="mb-3">
                                    <label for="passport" class="form-label">{{ __('Passport (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="passport" name="passport" accept="application/pdf" required>
                                </div>
                                <div class="mb-3">
                                    <label for="emirates_id" class="form-label">{{ __('Emirates ID (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="emirates_id" name="emirates_id" accept="application/pdf" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bank_statement" class="form-label">{{ __('Bank Statement (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="bank_statement" name="bank_statement" accept="application/pdf" required>
                                </div>
                                <div class="mb-3">
                                    <label for="trade_license" class="form-label">{{ __('Trade License (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="trade_license" name="trade_license" accept="application/pdf">
                                </div>
                                <div class="mb-3">
                                    <label for="vat_registration_certificate" class="form-label">{{ __('VAT Registration Certificate (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="vat_registration_certificate" name="vat_registration_certificate" accept="application/pdf">
                                </div>
                                <div class="mb-3">
                                    <label for="etihad_credit_bureau" class="form-label">{{ __('Etihad Credit Bureau (PDF only, max 100 MB)') }}</label>
                                    <input type="file" class="form-control" id="etihad_credit_bureau" name="etihad_credit_bureau" accept="application/pdf">
                                </div>
                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" style="background-color:#007681; border: #007681"
                                        class="btn btn-dark btn-lg">{{ __('Submit Request') }}</button>
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
