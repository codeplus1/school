@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/books" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/books/{{ $book->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Book Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $book->name }}">
                            </div>

                            <div class="form-group">
                                <label for="price">Book Price</label>
                                <input id="price" class="form-control" type="text" name="price" value="{{ $book->price }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Book Author</label>
                                <input id="author" class="form-control" type="text" name="author" value="{{ $book->author }}">
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mt-4">
                                <i class="fas fa-save"></i>
                                Update
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
