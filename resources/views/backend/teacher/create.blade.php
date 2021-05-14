@extends('backend.app')

@section('content')
    <div class="container">
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
                <form action="/teachers" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    @error('name')
                        <p class="text-danger alert-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" class="form-control" type="text" name="subject" value="{{ old('subject') }}">
                    </div>

                    @error('subject')
                        <p class="text-danger alert-danger">{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input id="salary" class="form-control" type="integer" name="salary" value="{{ old('salary') }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input id="mobile" class="form-control" type="tel" name="mobile" value="{{ old('mobile') }}">
                    </div>
                    <div class="form-group">
                        <label for="education">Education</label>
                        <input id="education" class="form-control" type="tel" name="education" value="{{ old('education') }}">
                    </div>

                    @error('education')
                    <p class="text-danger alert-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-success btn-sm mt-4">
                        <i class="fas fa-save"></i>
                        save
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
