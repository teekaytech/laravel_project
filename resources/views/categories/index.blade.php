
@extends('layouts.layout')
@section('title','lBlog|Categories')

@section('content')
    <div class="row">
        <h1>All Categories of Posts</h1>
    </div><br>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="/categories/{{ $category->id }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

