
@extends('app')

@section('content')

    <h1>{{ $article->title }}</h1>

    {!! Form::model($article,['method'=>'PATCH','url'=>'/articles/'.$article->id]) !!}
    @include('articles.form')
    {!! Form::submit('编辑文章',['class'=>'btn btn-primary form-control' ]) !!}
    {!! Form::close() !!}

    @include('errors.list')
@stop
