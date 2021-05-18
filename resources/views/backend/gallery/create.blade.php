@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="/gallery" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">GalleryName</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="images">Upload Images</label>
                    <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-4">
                    <i class="fas fa-save"></i>
                    Create Gallery
                </button>
                </form>
            </div>
        </div>
    </div>
@endsection
