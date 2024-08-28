@extends('locations.layout')

@section('content')
<div class="container my-5">
    <h1>Add Location</h1>
    <form action="{{ route('location.store') }}" method="post" class="mt-4">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <input type="text" id="code" name="code" class="form-control" placeholder="Location Code" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Location Name" required>
                </div>
                <br>
                <a href="{{ route('location.index') }}" class="btn btn-outline-primary">Back</a>
                <button type="submit" class="btn btn-outline-success">Save</button>
    </form>
</div>
@endsection