@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery/create" class="btn btn-primary btn-sm"> <i class="fas fa-plus-circle"></i> Add Gallery</a>
            </div>
            <div class="card-body">
                <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>GalleryName</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($gallery as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>{{ $gallery->name }}</td>
                                    <th>
                                        <a href="/gallery/{{ $gallery->id }}">Show</a>
                                        <a href="/gallery/{{ $gallery->id }}/edit">Edit</a>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
