@section('title')
    All Posts
@endsection
@extends('master')
@section('main')
    <div class="row align-items-start">
        @foreach ($allPosts as $post)
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-header bg-dark text-white">{{ $post->author }} <div class="float-end">{{ convert($post->created_at) }}</div></div>
                <div class="card-body text-center">
                   <h5>{{ $post->title }}</h5>
                   <div class="card-text">{{ $post->body }}</div><br>
                   <a href="/post/{{ $post->id }}"><button class="btn btn-warning">Show post</button></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection


