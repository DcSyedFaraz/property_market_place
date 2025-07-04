@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Create New Blog</h1>

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

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" placeholder="Title" class="form-control"> <br>
                <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" readonly>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>


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
                        {{ old('target_audience', 'UAE') == 'UAE' ? 'checked' : '' }}>
                    <label class="form-check-label" for="target_uae">
                        For UAE
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="target_audience" id="target_international"
                        value="International" {{ old('target_audience') == 'International' ? 'checked' : '' }}>
                    <label class="form-check-label" for="target_international">
                        For International
                    </label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
