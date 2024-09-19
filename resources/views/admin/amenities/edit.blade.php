@extends('admin.layout.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Amenity</h1>
                <form action="{{ route('Amenity.update', $amenity->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $amenity->name }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo URL</label>
                        <input type="text" name="logo" class="form-control" id="logo"
                            value="{{ $amenity->logo }}">
                        @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description">{{ $amenity->description }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Update Amenity</button>
                </form>
            </div>
        </div>
    </div>
@endsection
