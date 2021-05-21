@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery" class="btn btn-primary btn-sm"> <i class="fas fa-arrow-circle-left"></i> Back</a>

            </div>
        </div>
        <div>
            <div class="row">

                @foreach ($images as $image)
                   <div class="col-md-3 my-2">
                     <img src="{{ asset($image->name) }}" alt="" class="img-fluid">
                   </div>
                @endforeach
             </div>
        </div>

    </div>
@endsection



