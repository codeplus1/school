@extends('frontend.app')
@section('content')
    <div>
        <div class="container my-5">
            <h5 class="text-danger" style= "font-weight: 600;font-family: 'Times New Roman', Times, serif;">Our Students Profile</h5>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae et illo rem ducimus quam esse molestiae obcaecati magnam hic architecto veniam quod dicta necessitatibus repudiandae, voluptates sapiente, impedit expedita deleniti facere voluptatibus quos omnis ipsum magni repellat. Ipsum eos unde consectetur accusantium dolor quis hic quasi asperiores quibusdam, laborum nam.
        </div>
    </div>

    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($students as $student)
                <div class="col-md-3">
                    <div class="d-flex bg-white p-2 shadow">
                        <div>
                            <img src="{{ asset($student->image) }}" alt="" width="120">
                        </div>
                        <div class="mx-2 ">

                            <address>
                                <strong>Name: </strong> {{ $student->name }} <br>
                                <strong>Faculty: </strong> {{ $student->faculty->name }} <br>
                                <strong>Mobile: </strong> {{ $student->mobile }} <br>
                            </address>
                        </div>
                    </div>
            </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
