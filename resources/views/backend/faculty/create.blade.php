@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faculty" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                         {{-- message showing code start --}}
                    <div class="my-2">
                      @if (session('message'))
                     <div class="alert alert-success">{{ session('message') }}
                     </div>
                @endif
           </div>
                         {{-- end of Mesage showing code --}}
                        <form action="/faculty" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Faculty Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
