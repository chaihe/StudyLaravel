
@extends('app')

@section('content')

    <h1>撰写文章</h1>

    {!! Form::open(['url'=>'/articles']) !!}
    @include('articles.form')
    {!! Form::submit('发表文章',['class'=>'btn btn-primary form-control' ]) !!}
    {!! Form::close() !!}

    @include('errors.list')
@stop
