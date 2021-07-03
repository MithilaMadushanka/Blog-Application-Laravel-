@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-dark">
                        <h2 class="text-white">Welcome to my blog</h2><br>
                        <p class="text-white">You can see several things in my blog...</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h3>{{ $post->title }}</h3>
                        <h6>{{ date('Y-m-d',strtotime($post->created_at)) }}</h6><br>
                        <img src="{{ asset('thumbnails/'.$post->thumbnail) }}" alt="">
                        <p>{{ $post->description }}</p><br>
                        <a href="{{ route('posts.show',$post->id) }}">Continue Reading..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
