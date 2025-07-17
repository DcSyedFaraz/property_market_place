@extends('admin.layout.master')

@section('content')
    <div class="container">
       
        @php
            $locales = ['en' => 'English', 'ar' => 'Arabic']; // Add more if needed
        @endphp

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('blogs.store') }}" method="POST" class="pt-5" enctype="multipart/form-data">
            @csrf
            <div class="card mb-4">
                <div class="card-header">
                     <h1>Create New Blog</h1>
                </div>
                <div class="card p-3">
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Blog File</label>
                        <input type="file" class="form-control" id="image" name="image"
                            accept=".pdf,.docx,.jpg,.jpeg,.png">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Target Audience</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience" id="target_uae"
                                value="UAE" {{ old('target_audience', 'UAE') == 'UAE' ? 'checked' : '' }}>
                            <label class="form-check-label" for="target_uae">For UAE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience" id="target_international"
                                value="International" {{ old('target_audience') == 'International' ? 'checked' : '' }}>
                            <label class="form-check-label" for="target_international">For International</label>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Loop over all languages --}}
            @foreach ($locales as $locale => $language)
                <div class="card mb-4">
                    <div class="card-header">
                        {{ $language }} Content ({{ strtoupper($locale) }})
                    </div>
                    <div class="card-body">
                        {{-- Title --}}
                        <div class="mb-3">
                            <label class="form-label">Title ({{ strtoupper($locale) }})</label>
                            <input type="text" name="title[{{ $locale }}]" class="form-control"
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}" value="{{ old("title.$locale") }}">
                        </div>

                        {{-- Slug --}}
                        <div class="mb-3">
                            <label class="form-label">Slug ({{ strtoupper($locale) }})</label>
                            <input type="text" name="slug[{{ $locale }}]" class="form-control"
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}" value="{{ old("slug.$locale") }}">
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label class="form-label">Description ({{ strtoupper($locale) }})</label>
                            <textarea name="description[{{ $locale }}]" class="form-control description" rows="5" 
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}">{{ old("description.$locale") }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach


            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
