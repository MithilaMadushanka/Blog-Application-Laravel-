@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Post Title</label>
                                <input type="text" name="title" class="form-control" id="" placeholder="Enter Post Title" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="" class="form-control" rows="10" placeholder="Enter Post Description" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="thumbnail" id="">
                            </div>
                            <button type="submit" class="btn btn-success">Post</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
