@extends('layouts.frontend')

@section('content')
    <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    #{{ $post->id }}
                </div>
                <div class="card-body d-flex flex-column">
                    <center><img src="{{ asset('thumbnails/'.$post->thumbnail) }}" alt="" width="30%" height="20%"></center>
                    <h5 class="card-title mt-2">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
                <div class="card-footer text-muted"> {{ date('Y-m-d',strtotime($post->created_at)) }}</div>
            </div>
    </div>
@endsection
