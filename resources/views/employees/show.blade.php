@extends('employees.layout')

@section('content')
<div class="container my-5 d-flex justify-content-center">
    <div class="card" style="width: 25rem;">
        <div class="card-header">
            <h3 class="mb-0">{{ $employee->name }}</h3>
        </div>
        <div class="card-body">
            <!-- menggunakan null coalescing(??) untuk menghindari error -->
            <p class="card-text">Location: {{ $employee->location->name ?? 'N/A' }}</p>

            <!-- menggunakan format tanggal, bulan dan tahun lahir lengkap -->
            <p class="card-text">Birth Date: {{ date('d F Y', strtotime($employee->birth_date)) }}</p>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="{{ route('employee.index') }}" class="btn btn-outline-secondary">Back to Index</a>
        </div>
    </div>
</div>
@endsection