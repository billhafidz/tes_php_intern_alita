@extends('locations.layout')

@section('content')
<div class="container my-5">
    <h1>Edit Location</h1>
    <form action="{{ route('location.update', $location->id) }}" method="post" class="mt-4">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <input type="text" name="code" id="code" class="form-control" value="{{ $location->code }}" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" value="{{ $location->name }}" required>
                </div>
                <br>
                <a href="{{ route('location.index') }}" class="btn btn-outline-primary">Back</a>
                <input type="submit" value="Update" class="btn btn-outline-success">
    </form>

</div>
@endsection