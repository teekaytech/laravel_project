@extends('layouts.layout')
@section('title','lBlog | Create Post')

@section('content')
    <div class="row">
        <h1>Create Post</h1>
    </div><br><hr>
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea id="editor1" class="form-control" name="body" placeholder="Add body here">{!! old('body') !!}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>
    @if($errors->any())
        @foreach( $errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            {{ $error }}
        </div>
        @endforeach
    @endif

@endsection

