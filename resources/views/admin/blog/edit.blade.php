@extends('admin.layout.master')

@section('content')
    <div class="container">
        @php
            $locales = ['en' => 'English', 'ar' => 'Arabic'];
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

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" class="pt-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card mb-4">
                <div class="card-header">
                    <h1>Edit Blog</h1>
                </div>
                <div class="card p-3">
                    {{-- Existing Image --}}
                    <div class="mb-3">
                        <label class="form-label">Current Blog Image</label><br>
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="150" class="mb-2">
                        @else
                            <p>No image uploaded.</p>
                        @endif
                    </div>

                    {{-- Upload New Image --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload New Blog File</label>
                        <input type="file" class="form-control" id="image" name="image"
                            accept=".pdf,.docx,.jpg,.jpeg,.png">
                    </div>

                    {{-- Target Audience --}}
                    <div class="mb-3">
                        <label class="form-label">Target Audience</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience" id="target_uae"
                                value="UAE" {{ old('target_audience', $blog->target_audience) == 'UAE' ? 'checked' : '' }}>
                            <label class="form-check-label" for="target_uae">For UAE</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="target_audience" id="target_international"
                                value="International" {{ old('target_audience', $blog->target_audience) == 'International' ? 'checked' : '' }}>
                            <label class="form-check-label" for="target_international">For International</label>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Loop over languages --}}
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
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}"
                                value="{{ old("title.$locale", $blog->translate($locale)?->title) }}">
                        </div>

                        {{-- Slug --}}
                        <div class="mb-3">
                            <label class="form-label">Slug ({{ strtoupper($locale) }})</label>
                            <input type="text" name="slug[{{ $locale }}]" class="form-control"
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}"
                                value="{{ old("slug.$locale", $blog->translate($locale)?->slug) }}">
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label class="form-label">Description ({{ strtoupper($locale) }})</label>
                            <textarea name="description[{{ $locale }}]" class="form-control description" rows="5"
                                dir="{{ $locale === 'ar' ? 'rtl' : 'ltr' }}">{{ old("description.$locale", $blog->translate($locale)?->description) }}</textarea>
                        </div>
                    </div>
                </div>
            @endforeach

            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
