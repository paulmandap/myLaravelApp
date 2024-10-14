@extends('layout')

@section('content')
    <div class="container">
        <h2>Create a New Student</h2>

        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter student's name">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter student's address">
            </div>

            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Enter student's contact">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection