@extends('layouts/main')

@section('title', '| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-3">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Created At</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id}}</th> 
                            <td>
                                <a href="{{ route('posts.show', $post->id)}}"> 
                                    {{--  {{ substr($post->title, 0, 20)}} {{ strlen($post->title > 20 ? "..." : "")}}   --}}
                                    {{$post->title}}
                                </a>
                            </td> 
                            <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td> 
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-primary">Edit</a>
                            </td> 
                        </tr>
                    </a>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop