@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="/gallery/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">GalleryName</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $gallery->name }}">
                </div>

                <div class="form-group">
                    <label for="images">Upload Images</label>
                    <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-success btn-sm mt-4">
                    <i class="fas fa-save"></i>
                    update Gallery
                </button>
                </form>

                <div class="my-3">


                        @foreach ($galleries as $gallery)
                        <form action="/galleryimage/{{ $gallery->id }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $gallery->id }}">
                                <div class="my-2">
                                    <img src="{{ asset($gallery->name) }}" alt="" width="120" >
                                </div>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-body">
                                            <img src="{{ asset($gallery->name) }}" alt="" class="img-fluid">

                                    </div>
                                    <div class="modal-footer">
                                   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                        @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
