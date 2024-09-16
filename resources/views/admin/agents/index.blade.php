@extends('admin.layout.master')

@section('content')
    <div class="container">
        <h1>Agents</h1>
        <a href="{{ route('agents.create') }}" class="btn btn-primary mb-3">Add New Agent</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($agents as $agent)
                    <tr>
                        <td>{{ $agent->id }}</td>
                        <td>{{ $agent->name }}</td>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->phone }}</td>
                        <td>{{ ucfirst($agent->status) }}</td>
                        <td>
                            <a href="{{ route('agents.show', $agent->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No agents found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
