@extends('frontend.app')

@section('content')

        <div>
            <div class="container my-5">
                <h1 class="text-uppercase" style= "font-weight: 600;font-family: 'Times New Roman', Times, serif;">Our <span class="text-danger">Gallery</span></h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, dicta laboriosam dolorem voluptatibus unde fuga. Officia quas provident unde modi fugit, cupiditate esse aliquam fuga numquam ut dolorem voluptates ad! Consequatur eveniet ipsum aperiam eaque quia saepe et at doloribus veniam, voluptates nam aliquam laudantium labore, ad explicabo deleniti libero rerum similique praesentium facilis, amet sapiente repellat? Inventore blanditiis aliquid deserunt corporis, ipsam tempora facere voluptate vero aspernatur, repellat maiores delectus? Aspernatur voluptas repellat, voluptate harum incidunt suscipit voluptatibus minima quos magni architecto reiciendis dolorem nulla eligendi, dolores maiores ab mollitia iure atque cumque illo ducimus aliquid accusamus dolore. Exercitationem.
            </div>
        </div>
        <div class="container">
            <div class="row">
                    @foreach ($gallery as $gallery)
                        <div class="col-md-3">
                            <h5><a href="/gallerycontent/{{ $gallery->id }}">{{ $gallery->name }}</a></h5>
                        </div>
                    @endforeach
            </div>
        </div>
@endsection



