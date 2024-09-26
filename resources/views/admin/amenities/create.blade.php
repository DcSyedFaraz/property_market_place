@extends('admin.layout.master')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Amenity</h1>
                <form action="{{ route('Amenity.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="community_ids">Select Communities:</label>
                        <select id="community_ids" name="community_ids[]" multiple required>
                            @foreach ($communities as $community)
                                <option value="{{ $community->id }}">{{ $community->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo URL</label>
                        <input type="text" name="logo" class="form-control" id="logo"
                            value="{{ old('logo') }}">
                        @error('logo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Create Amenity</button>
                </form>
            </div>
        </div>
    </div>
@endsection
