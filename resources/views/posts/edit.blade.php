@extends('layouts/main')

@section('title', '| edit post')

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT'], ["class" => 'form-control']) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
            
            {{ Form::label('title', 'Body:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('body', null, ["class" => 'form-control input-lg']) }}
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
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} 
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('save Changes', ['class' => 'btn btn-success btn-block']) }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <div class="row" style="margin-top: 50px;">
        <a href="/posts" class="btn btn-lg btn-block btn-secondary">Back to list</a>
    </div>
    
@stop