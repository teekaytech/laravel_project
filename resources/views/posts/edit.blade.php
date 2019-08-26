@extends('layouts.layout')
@section('title','lBlog|Edit Post')

@section('content')
    <div class="row">
        <h1>Edit Post</h1>
    </div><br>
    <div style="margin-bottom: 5px;">
        <form method="POST" action="/posts/{{ $post->id }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea id="editor1" class="form-control" name="body" >{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
    <form method="POST" action="/posts/{{ $post->id }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-primary">Delete Post</button>
    </form>

@endsection

