@extends('frontend.app')

@section('content')
    <div class="conatiner">
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-md-3">
                    <img src="{{ asset($photo->name) }}" alt="" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
@endsection



