@extends('students.layout')

@section('content')
<div class="card" style="margin: 20px;">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $student->name }}</h5>
        <p class="card-text">Address: {{ $student->address }}</p>
        <p class="card-text">Contact: {{ $student->contact }}</p>
    </div>
    <hr>
</div>

<div class="card" style="margin: 20px;">
    <div class="card-header">
        <h2>QR Code</h2>
    </div>
    <div class="card-body">
        {!! QrCode::size(300)->generate(route('students.show', $student->id)) !!} <!-- Using $student->id -->
    </div>
</div>
@endsection
