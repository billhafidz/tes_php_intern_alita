@extends('employees.layout')

@section('content')
<div class="container my-5">
    <h1>Add Employee</h1>
    <form action="{{ route('employee.store') }}" method="post" class="mt-4">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Employee Name" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" id="location_code" name="location_code" class="form-control" placeholder="Location Code" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                </div>
            </div>
        </div>

        <br>
        <a href="{{ route('employee.index') }}" class="btn btn-outline-primary">Back</a>
        <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection