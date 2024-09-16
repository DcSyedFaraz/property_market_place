@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Properties</h1>
        <a href="{{ route('agentproperty.create') }}" class="btn btn-primary mb-3">Add New Property</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Area (sq ft)</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->location }}</td>
                        <td>{{ number_format($property->price, 2) }}</td>
                        <td>{{ $property->area }}</td>
                        <td>{{ ucfirst($property->status) }}</td>
                        <td>
                            <a href="{{ route('agentproperty.show', $property->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('agentproperty.edit', $property->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('agentproperty.destroy', $property->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No properties found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
