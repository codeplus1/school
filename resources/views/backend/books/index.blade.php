@extends('backend.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/books/create" class="btn btn-outline-dark btn-sm float-right">Create New Book</a>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                           <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->author }}</td>
                                <td><a href="/books/{{ $book->id }}/edit">Edit</a>
                                    <a href="/books/{{ $book->id }}">Show</a>
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
