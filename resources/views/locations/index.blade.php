@extends('locations.layout')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <h1 class="text-center">Location</h1>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('employee.index') }}" class="btn btn-outline-secondary">Employee</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th colspan="3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="{{ route('location.create') }}" class="btn btn-outline-success">Add Location</a>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr class="text-center">
                    <th>Code</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($locations as $location)
                <tr class="text-center">
                    <td>{{ $location->code }}</td>
                    <td>{{ $location->name }}</td>
                    <td>
                        <a href="{{ route('location.edit', $location->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form onclick="return confirm('Are you sure?')" action="{{ route('location.destroy', $location->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $locations->links() }}
    </div>
</div>
@endsection