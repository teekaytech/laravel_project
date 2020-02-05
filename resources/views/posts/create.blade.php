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
            <textarea class="form-control" name="body" placeholder="Add body here">{!! old('body') !!}
            </textarea>
        </div>

        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id">
                <option value="">Select</option>
                @foreach( $categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form><br>

    @include('errors')

@endsection

