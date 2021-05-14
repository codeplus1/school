@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faculty/create" class="btn btn-primary btn-sm float-right">Add Faculty</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                           <thead>
                            <tr>
                                <th>#</th>
                                <th>Faculty Name</th>
                                <th>Action</th>
                            </tr>
                           </thead>

                           <tbody>
                               @foreach ($faculties as $faculty)
                                   <tr>
                                       <td>{{ $faculty->id }}</td>
                                       <td>{{ $faculty->name }}</td>
                                       <td>
                                           <a href="/faculty/{{ $faculty->id }}/edit">Edit</a>
                                           <a href="/faculty/{{ $faculty->id }}">Show</a>
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
