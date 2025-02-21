@extends('admin.layout.master')

@section('content')
<div class="container">
    <h2 class="my-3">Add Team Member</h2>
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
		 <div class="mb-3">
            <label>ID</label>
            <input type="text" name="NID" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control" required>
        </div>
		 <div class="mb-3">
            <label>Specialties</label>
            <textarea name="specialties" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
		<div class="mb-3">
            <label>Experience</label>
            <textarea name="experience" class="form-control" required></textarea>
        </div>
		<div class="mb-3">
            <label>Languages</label>
            <textarea name="languages" class="form-control" required></textarea>
        </div>
	    <div class="mb-3">
            <label>Profile Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Facebook</label>
            <input type="url" name="facebook" class="form-control">
        </div>
        <div class="mb-3">
            <label>Twitter</label>
            <input type="url" name="twitter" class="form-control">
        </div>
        <div class="mb-3">
            <label>LinkedIn</label>
            <input type="url" name="linkedin" class="form-control">
        </div>
        <div class="mb-3">
            <label>Instagram</label>
            <input type="url" name="instagram" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
