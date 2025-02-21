@extends('admin.layout.master')

@section('content')
<div class="container">
    <h2 class="my-3">Edit Team Member</h2>
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
        </div>
		 <div class="mb-3">
            <label>ID</label>
            <input type="text" name="NID" class="form-control" value="{{ $team->NID}}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $team->email }}" required>
        </div>
        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
        </div>
        <div class="mb-3">
            <label>Specialties</label>
            <textarea name="specialties" class="form-control" required>{{ $team->specialties }}</textarea>
        </div>
		 <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $team->description }}</textarea>
        </div>
		<div class="mb-3">
            <label>Experience</label>
            <textarea name="experience" class="form-control" required>{{ $team->experience ?? "" }}</textarea>
        </div>
		<div class="mb-3">
            <label>Languages</label>
            <textarea name="languages" class="form-control" required>{{ $team->languages ?? "" }}</textarea>
        </div>
	    <div class="mb-3">
            <label>Profile Image</label>
            <input type="file" name="image" class="form-control">
            @if($team->image)
                <img src="{{ asset('uploads/' . $team->image) }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label>Facebook</label>
            <input type="url" name="facebook" class="form-control" value="{{ $team->facebook }}">
        </div>
        <div class="mb-3">
            <label>Twitter</label>
            <input type="url" name="twitter" class="form-control" value="{{ $team->twitter }}">
        </div>
        <div class="mb-3">
            <label>LinkedIn</label>
            <input type="url" name="linkedin" class="form-control" value="{{ $team->linkedin }}">
        </div>
        <div class="mb-3">
            <label>Instagram</label>
            <input type="url" name="instagram" class="form-control" value="{{ $team->instagram }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
