
@extends('layouts.layout')
@section('title','lBlog|Categories')

@section('content')
    <div class="row">
        <h1>All Categories of Posts</h1>
    </div><br>
    <dl class="list-group">
        @foreach($categories as $category)
            <dt class="list-group-item d-flex justify-content-between align-items-center categories_menu">
                <a href="/categories/{{ $category->id }}" class="ch" id="{{ $category->id }}">
                    {{ $category->name }}

                </a>
            </dt>
            <dd class="list-group-item d-flex justify-content-between align-items-center category_list">
                check
            </dd>

        @endforeach
    </dl>

    <script type="text/javascript">
        $(document).ready(function(){
            $('dl dt.categories_menu .ch').on('mouseenter', function() {
                let cid = ($(this).attr("id"));
                $.ajax({
                    URL: '/categories/posts/1',
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        console.log(data);
                        // console.log(posts);
                        // console.log('success', data);
                    },
                    error: function (error) {
                        console.log(error);
                        // alert(" Can't do because: " + error);
                    }
                });
            });
        });
    </script>
@endsection







