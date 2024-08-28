@extends('employees.layout')

@section('content')
<div class="container my-5">
    <div class="mb-4">
        <h1 class="text-center">Employee</h1>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('location.index') }}" class="btn btn-outline-secondary">Location</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="text-center">
                    <th colspan="4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a href="{{ route('employee.create') }}" class="btn btn-outline-success">Add Employee</a>
                            </div>
                            <form action="{{ route('employee.index') }}" method="GET" class="d-flex">
                                <div class="input-group">
                                    <input type="number" name="age" class="form-control" placeholder="Enter age" value="{{ request('age') }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-outline-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </th>
                </tr>
                <tr class="text-center">
                    <th>Name</th>
                    <th>Location</th>
                    <th>Birth Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($employees as $employee)
                <tr class="text-center">
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->location ? $employee->location->name : 'N/A' }}</td>
                    <td>{{ date('d M Y', strtotime($employee->birth_date)) }}</td>
                    <td>
                        <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-info btn-sm">Show</a>
                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form onclick="return confirm('Are you sure?')" action="{{ route('employee.destroy', $employee->id) }}" method="post" class="d-inline">
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

    <!-- pagination -->
    {{ $employees->links() }}
</div>
@endsection