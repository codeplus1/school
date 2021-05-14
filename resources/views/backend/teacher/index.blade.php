@extends('backend.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/teachers/create" class="btn btn-primary btn-sm">Create New Teacher</a>
            </div>
            <div class="card-body">
                <table class="table" id="datatable">
                   <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Mobile</th>
                        <th>Action</th>
                    </tr>
                   </thead>

                   <tbody>
                       @foreach ($teachers as $teacher)
                       <tr>
                           <td>{{ $teacher->id }}</td>
                           <td>{{ $teacher->name }}</td>
                           <td>{{ $teacher->subject }}</td>
                           <td>{{ $teacher->mobile }}</td>
                           <td>
                               <a href="/teachers/{{ $teacher->id }}/edit">Edit</a>
                               <a href="/teachers/{{ $teacher->id }}">Show</a>
                           </td>
                       </tr>

                       @endforeach
                   </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
