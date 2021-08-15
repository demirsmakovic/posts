@section('title')
    Edit Post
@endsection
@extends('master')
@section('main')
    <h1 class="text-center">Edit Post</h1>
    <div class="row align-items-center">
        <div class="col-md-6 offset-md-3">
            <form action="/post/{{$post->id}}/edit" method="post">
                @csrf
                @method('put')
                <div class="form-floating mb-3">
                  <input type="name" name="author" class="form-control
                  @if(old('author', null)) {{'is-valid'}} @endif
                   {{ $errors->has('author') ? 'is-invalid' : ''}}" value="{{ $post->author }}" id="name">
                    <label for="author">Your name</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="title" name="title" class="form-control
                  @if(old('title', null)) {{'is-valid'}} @endif
                  {{ $errors->has('title') ? 'is-invalid' : ''}}" value="{{ $post->title }}" id="title">
                    <label for="title">Title</label>
                </div>
                <div class="form-floating mb-3">
                  <textarea class="form-control
                  @if(old('body', null)) {{'is-valid'}} @endif
                  {{ $errors->has('body') ? 'is-invalid' : ''}}" name="body" id="body" style="height: 100px">{{ $post->body }}</textarea>
                    <label for="body">Body</label>
                </div>
                <button type="submit" class="btn btn-danger">Save Post</button>
                <button type="reset" class="btn btn-primary float-end">Reset</button>
            </form>
        </div>
    </div>
@endsection