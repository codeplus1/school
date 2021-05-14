@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/students/create" class="btn btn-outline-dark btn-sm float-right">Create New Student</a>
                </div>
                <div class="card-body">
                  <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Students Name</th>
                            <th>Age</th>
                            <th>Roll</th>
                            <th>Mobile</th>
                            <th>Faculty</th>
                            <th>Action</th>
                          </tr>
                    </thead>

                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->roll }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>{{ $student->faculty->name }}</td>
                            <td>

                                <form action="/students/{{ $student->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="/students/{{ $student->id }}/edit">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@endsection
