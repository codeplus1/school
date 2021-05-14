@extends('backend.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/books" class=" btn btn-outline-primary mt-3">Back</a>
                <address>
                    <strong>Book Name: </strong> {{ $book->name }} <br>
                    <strong>Book Price: </strong> Rs.{{ $book->price }} <br>
                    <strong>Book Author: </strong> {{ $book->author }} <br>
                </address>
            </div>
        </div>
    </div>
@endsection
