@extends('admin.layout.master')

@section('content')

    <div class="container">
        <h1>Edit Blog</h1>

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

        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $blog->title) }}" required>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $blog->slug) }}"
                    class="form-control" placeholder="Slug" readonly>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" id="description">{{ old('description', $blog->description) }}</textarea>
            </div>

            <!-- Current Contract File -->
            @if ($blog->file_path)
                <div class="mb-3">
                    <label class="form-label">Current Blog File:</label>
                    <p>
                        <a href="{{ asset('storage/' . $blog->file_path) }}" target="_blank">View Contract</a>
                    </p>
                </div>
            @endif

            <!-- blog File Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Upload Blog File</label>
                <input type="file" class="form-control" id="image" name="image"
                    accept=".pdf,.docx,.jpg,.jpeg,.png">
            </div>

            <div class="mb-3">
                <label class="form-label">Target Audience</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="target_audience" id="target_uae" value="UAE"
                        {{ old('target_audience', $blog->target_audience) == 'UAE' ? 'checked' : '' }}>
                    <label class="form-check-label" for="target_uae">
                        For UAE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="target_audience" id="target_international"
                        value="International" {{ $blog->target_audience == 'International' ? 'checked' : '' }}>
                    <label class="form-check-label" for="target_international">
                        For International
                    </label>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
