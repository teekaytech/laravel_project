
@extends('layouts.layout')
@section('title','lBlog | View Post')

@section('content')
    <small class="post-date"> Posted on: {{ $post->created_at }} </small>
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    <small class="post-date"> Last modified on: {{ $post->updated_at }} </small>

    <a class="btn btn-primary" href="/posts">Back</a>
    <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit">Edit</a>
    </div>

@endsection

