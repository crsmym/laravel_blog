@extends('layouts/main')

@section('title', '| All Posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-md btn-block btn-success">Write</a>
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
                            <td width="10%">{{ $post->id}}</td> 
                            <td width="60%">
                                <a href="{{ route('posts.show', $post->id)}}"> 
                                    {{ substr($post->title, 0, 40)}} 
                                    {{ strlen($post->title) > 40 ? ". . ." : "" }}  
                                    {{-- {{$post->title}} --}}
                                </a>
                            </td> 
                            <td width="20%">{{ date('M j, Y', strtotime($post->created_at)) }}</td> 
                            <td width="10%">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-primary">Edit</a>
                            </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop