@extends('admin.layout.master')


@section('content')
    <div class="container">
        <a href="{{ route('developer_properties.create') }}" class="btn btn-primary mb-3">Add Developer Properties</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>developer_id</th>
                    <th>status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($developer_properties as $developer)
                    <tr>
                        <td>{{ $developer->name }}</td>
                        <td>{{ $developer->developer_id }}</td>
                        <td>{{ $developer->status }}</td>


                        <td>
                            <a href="{{ route('developer_properties.show', $developer->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('developer_properties.edit', $developer->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('developer_properties.destroy', $developer->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No properties found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
