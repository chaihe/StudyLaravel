
@extends('app')

@section('content')

    <h1>ArticlesContent -- {{$article->title}}</h1>
    <hr>

    <div class="body">
        <h5>{{$article->content}}</h5>
    </div>

@stop
