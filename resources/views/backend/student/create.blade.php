@extends('backend.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="my-2 alert alert-success alert-sm">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <a href="/students" class="btn btn-primary btn-sm ">Back</a>
                </div>
                <div class="card-body">
                    <form action="/students" method="post">
                        @csrf
                           <div class="form-group">
                               <label for="name">Full Name</label>
                               <input id="name" class="form-control" type="text" name="name">
                           </div>

                           <div class="form-group">
                               <label for="age">Age</label>
                               <input id="age" class="form-control" type="number" name="age">
                           </div>

                           <div class="form-group">
                               <label for="roll">Roll No</label>
                               <input id="roll" class="form-control" type="number" name="roll">
                           </div>

                           <div class="form-group">
                               <label for="mobile">Mobile No</label>
                               <input id="mobile" class="form-control" type="tel" name="mobile">
                           </div>

                           <div class="form-group">
                               <label for="faculty_id">Select Faculty</label>
                               <select id="faculty_id" class="form-control" name="faculty_id">
                                   @foreach ($faculties as $faculty)
                                   <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>

                                   @endforeach
                               </select>
                           </div>

                           <button type="submit" class="btn btn-success btn-sm mt-4">Save Record</button>
                       </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
