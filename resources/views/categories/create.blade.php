@extends('layouts.layout')
@section('title','lBlog | Create Category')

@section('content')
    <div class="row">
        <h1>Create Post</h1>
    </div><br><hr>
    <form method="POST" action="/categories">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>

    @include('errors')

@endsection

