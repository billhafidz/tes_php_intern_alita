@extends('employees.layout')

@section('content')
<div class="container my-5">
    <h1>Edit Employee</h1>
    <form action="{{ route('employee.update', $employee->id) }}" method="post" class="mt-4">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <input type="text" name="name" id="name" value="{{ $employee->name }}" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="location_code" id="location_code" value="{{ $employee->location_code }}" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="date" name="birth_date" id="birth_date" value="{{ $employee->birth_date }}" class="form-control" required>
                </div>
            </div>
        </div>

        <br>
        <a href="{{ route('employee.index') }}" class="btn btn-outline-primary">Back</a>
        <input type="submit" value="Update" class="btn btn-outline-success">
        <br>
    </form>



</div>
@endsection