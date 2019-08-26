
@extends('layouts.layout')
@section('title','lBlog | Blogs')

@section('content')
    <div class="row">
        <h1>Latest Posts</h1>
    </div><br><hr>
    @foreach($posts as $post)
        <h3>{{ $post->title }}</h3>
        <div class="row">
{{--            <div class="col-md-2">--}}
{{--                <img src="myimage.jpg" alt="{{ $post->title }}'s image">--}}
{{--            </div>--}}
            <div class="col-md-12">
                <small class="post-date">
                    Posted on: {{ $post->created_at }}

                </small>
                {{ str_limit($post->body, 450) }}
                <p><a class="btn btn-primary" href="/posts/{{ $post->id }}">Read more</a></p>
            </div>
        </div><br>
    @endforeach
@endsection

