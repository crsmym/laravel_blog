@extends('layouts/main')

@section('title', '| Create New Post')

@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <h1>Write Post</h1>
            <hr>
            {!! Form::open(array('route' => 'posts.store')) !!}
                {{ Form::label('title', 'Title : ') }}
                {{ Form::text('title', Null, array('Class' => 'form-control'))}}

                {{ Form::label('title', 'Post Body :') }}
                {{ Form::textarea('body', null, array('Class' => 'form-control'))}}
                {{ Form::submit('Create Post', array('Class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection