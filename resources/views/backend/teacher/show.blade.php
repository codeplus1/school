@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="/teachers" class="btn btn-outline-primary btn-sm mt-3">Back</a>
                        <address>
                            <strong>Teacher Name: </strong> {{ $teacher->name }} <br>
                            <strong>Teacher Salary: </strong> {{ $teacher->salary }} <br>
                            <strong>Teacher Mobile: </strong> {{ $teacher->mobile }} <br>
                            <strong>Teacher Education: </strong> {{ $teacher->education }} <br>
                            <strong>Teacher Subject: </strong> {{ $teacher->subject }} <br>
                        </address>


            </div>
        </div>
    </div>
@endsection
