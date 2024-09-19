@extends('admin.layout.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Communities</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#communityModal">Add Community</button>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Feature Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($communities as $community)
                    <tr>
                        <td>{{ $community->name }}</td>
                        <td>{{ $community->description }}</td>
                        <td>{{ $community->feature_description }}</td>
                        <td><img src="{{ asset('storage/' . $community->image) }}" alt="{{ $community->name }}" width="100">
                        </td>
                        <td>
                            <button class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $community->id }}">Edit</button>
                            <form action="{{ route('communities.destroy', $community) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal{{ $community->id }}" tabindex="-1"
                        aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('communities.update', $community) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Community</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                value="{{ $community->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control">{{ $community->description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="feature_description" class="form-label">Feature Description</label>
                                            <textarea name="feature_description" class="form-control">{{ $community->feature_description }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" accept="image/*" name="image" class="form-control">
                                        </div>
                                        @if ($community->image)
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Current Image</label>
                                                <img src="{{ asset('storage/' . $community->image) }}" alt="community Image"
                                                    class="img-thumbnail" width="150">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>

        <!-- Add Modal -->
        <div class="modal fade" id="communityModal" tabindex="-1" aria-labelledby="communityModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('communities.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="communityModalLabel">Add Community</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="feature_description" class="form-label">Feature Description</label>
                                <textarea name="feature_description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" accept="image/*" name="image" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Community</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
