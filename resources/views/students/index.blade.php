@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Laravel 9 CRUD (Create, Read, Update, Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success mb-3">
                            <i class="fa fa-plus"></i> Add New Student
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead style="background-color: #f8f9fa;">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>QR Code</th> <!-- New column for QR Code -->
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->contact }}</td>
                                            <td>
                                                <img src="{{ $qrCodes[$item->id] }}" alt="QR Code for {{ $item->name }}" style="width: 100px; height: 100px;"/> <!-- QR Code Image -->
                                            </td>
                                            <td>
                                                <a href="{{ url('/students/' . $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye"></i> View
                                                </a>
                                                <a href="{{ url('/students/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o"></i> Edit
                                                </a>
                                                <form method="POST" action="{{ url('/students/' . $item->id) }}" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                                        <i class="fa fa-trash-o"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
