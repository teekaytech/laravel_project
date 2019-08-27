@extends('layouts.layout')
@section('title','lBlog | Category')

@section('content')
    <h1>Posts in {{ $category->name }}</h1><hr>
    @foreach( $category->posts as $category_post)
        <h3>{{ $category_post->title }}</h3>
        <div class="row">
            {{--            <div class="col-md-2">--}}
            {{--                <img src="myimage.jpg" alt="{{ $post->title }}'s image">--}}
            {{--            </div>--}}
            <div class="col-md-12">
                <small class="post-date">
                    Posted on: {{ $category_post->created_at }}
                    in <b>{{ $category_post->category_id }}</b> category.
                </small>
                {{ str_limit($category_post->body, 450) }}
                <p><a class="btn btn-primary" href="/posts/{{ $category_post->id }}">Read more</a></p>
            </div>
        </div><br>
    @endforeach
@endsection
