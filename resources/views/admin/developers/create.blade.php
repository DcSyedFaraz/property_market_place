@extends('admin.layout.master')

@section('content')
<div class="container">
    <h1>{{ isset($developer) ? 'Edit Developer' : 'Add New Developer' }}</h1>
    <form action="{{ isset($developer) ? route('developers.update', $developer->id) : route('developers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($developer))
            @method('PUT')
        @endif
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $developer->name ?? old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $developer->email ?? old('email') }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $developer->phone ?? old('phone') }}">
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
            @if(isset($developer) && $developer->logo)
                <img src="{{ $developer->logo }}" alt="{{ $developer->name }} Logo" width="100">
            @endif
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="active" {{ (isset($developer) && $developer->status == 'active') ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ (isset($developer) && $developer->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ $developer->description ?? old('description') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">{{ isset($developer) ? 'Update' : 'Submit' }}</button>
    </form>
</div>
@endsection
