@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/teachers" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        {{-- message showing code start --}}
                        <div class="my-2">
                            @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                            @endif
                        </div>
                        {{-- end of Mesage showing code --}}

                        <form action="/teachers/{{ $teacher->id }}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $teacher->name }}">
                            </div>

                            <div class="form-group">
                                <label for="salary">Salary</label>
                                <input id="salary" class="form-control" type="text" name="salary" value="{{ $teacher->salary }}">
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input id="subject" class="form-control" type="text" name="subject" value="{{ $teacher->subject }}">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile No</label>
                                <input id="mobile" class="form-control" type="tel" name="mobile" value="{{ $teacher->mobile }}">
                            </div>

                            <div class="form-group">
                                <label for="education">Education</label>
                                <input id="education" class="form-control" type="text" name="education" value="{{ $teacher->education }}">
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mt-4">
                                <i class="fas fa-save"></i>
                                Update Record
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
