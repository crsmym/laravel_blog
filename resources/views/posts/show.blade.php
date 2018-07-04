@extends('layouts/main')

@section('title', '| View post')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <div class="dl-horizontal">
                    <dt>작성일:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                </div>
                
                <div class="dl-horizontal">
                    <dt>수정일:</dt>
                    <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!} 
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <a href="/posts" class="btn btn-lg btn-block btn-secondary">Back to list</a>
    </div>

@endsection