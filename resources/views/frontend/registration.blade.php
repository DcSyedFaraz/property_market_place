@extends('frontend.layout.app')

@section('content')
    <div class="container mt-5">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header text-white text-center" style="background-color: #007681;">
                        <h4>{{ __('Submit Your Information') }}</h4>
                    </div>



                    <div class="card-body">
                        <form method="POST" action="{{ route('registration.submit') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="form-group row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name" required
                                        autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="w-100 form-control @error('email') is-invalid @enderror" name="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Phone Number -->
                            <div class="form-group row mb-3">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="tel"
                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                        required>
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Trade License (File Upload) -->
                            <div class="form-group row mb-3">
                                <label for="trade_license"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Trade License') }}</label>
                                <div class="col-md-6">
                                    <input id="trade_license" type="file"
                                        class="form-control-file @error('trade_license') is-invalid @enderror"
                                        name="trade_license" required>
                                    <small class="form-text text-muted">Upload 1 supported file. Max 100 MB.</small>
                                    @error('trade_license')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Emirates_ID (File Upload) -->
                            <div class="form-group row mb-3">
                                <label for="emirates_id"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Emirates ID') }}</label>
                                <div class="col-md-6">
                                    <input id="emirates_id" type="file"
                                        class="form-control-file @error('emirates_id') is-invalid @enderror"
                                        name="emirates_id" required>
                                    <small class="form-text text-muted">Upload 1 supported file. Max 100 MB.</small>
                                    @error('emirates_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Passport (File Upload) -->
                            <div class="form-group row mb-3">
                                <label for="passport"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Passport') }}</label>
                                <div class="col-md-6">
                                    <input id="passport" type="file"
                                        class="form-control-file @error('passport') is-invalid @enderror" name="passport"
                                        required>
                                    <small class="form-text text-muted">Upload 1 supported file. Max 100 MB.</small>
                                    @error('passport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Bank Account No. -->
                            <div class="form-group row mb-3">
                                <label for="bank_account_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Bank Account No.') }}</label>
                                <div class="col-md-6">
                                    <input id="bank_account_no" type="number"
                                        class="form-control @error('bank_account_no') is-invalid @enderror"
                                        name="bank_account_no" required>
                                    @error('bank_account_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Letter for IBAN -->
                            <div class="form-group row mb-3">
                                <label for="iban_letter"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Letter for IBAN') }}</label>
                                <div class="col-md-6">
                                    <input id="iban_letter" type="text"
                                        class="form-control @error('iban_letter') is-invalid @enderror" name="iban_letter"
                                        required>
                                    @error('iban_letter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- VAT Registration No. (TRN) -->
                            <div class="form-group row mb-3">
                                <label for="vat_registration_no"
                                    class="col-md-4 col-form-label text-md-right">{{ __('VAT Registration No. (TRN)') }}</label>
                                <div class="col-md-6">
                                    <input id="vat_registration_no" type="text"
                                        class="form-control @error('vat_registration_no') is-invalid @enderror"
                                        name="vat_registration_no" required>
                                    @error('vat_registration_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Contact Person Name -->
                            <div class="form-group row mb-3">
                                <label for="contact_person_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Contact Person Name') }}</label>
                                <div class="col-md-6">
                                    <input id="contact_person_name" type="text"
                                        class="form-control @error('contact_person_name') is-invalid @enderror"
                                        name="contact_person_name" required>
                                    @error('contact_person_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Office Address -->
                            <div class="form-group row mb-3">
                                <label for="office_address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Office Address') }}</label>
                                <div class="col-md-6">
                                    <input id="office_address" type="text"
                                        class="form-control @error('office_address') is-invalid @enderror"
                                        name="office_address" required>
                                    @error('office_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block" style="background-color: #007681;color:#fff;">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
