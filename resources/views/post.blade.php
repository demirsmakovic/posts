@section('title')
    Singl Post
@endsection
@extends('master')
@section('main')
  <h1 class="text-center mt-4 mb-4">Single Post</h1>
    <div class="row align-items-center">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header bg-dark text-white">{{ $post->author }}</div>
            <div class="card-body text-center">
              <h5>{{ $post->title }}</h5>
              <div class="card-text">{{ $post->body }}</div>
            </div>
            <div class="card-footer">
              <a class="btn btn-warning" href="/post/{{$post->id}}/edit">Edit post</a>
              <a class="btn btn-danger float-end" href="/post/{{$post->id}}/delete">Delete post</a>
            </div>
        </div>
      </div>          
@endsection