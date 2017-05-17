
@extends('app')

@section('content')

{{--@if($first == 'chai')--}}
{{--<h1>my name is Chai zhi  one more {{$first}} or {{$last}}</h1>--}}
{{--@else--}}
{{--<h1>my age {{$age}}</h1>--}}
{{--@endif--}}

    <div style="width:1200px; height:70px;">
        <div style="width:300px;height:70px;float:left;"><h1>Articles List</h1></div>
        <div style="width:200px;height:70px; float:right;text-align: right;"><h1><a href="articles/create">发布文章</a></h1></div>
    </div>
    <hr>

    @foreach($articles as $article)

        <h3><a href="articles/{{$article->id}}">{{$article->title}}</a></h3>
        {{--<h3><a href="{{url("articles",$article->id)}}">{{$article->title}}</a></h3>--}}
        <h3><a href="{{ action('ArticlesController@show',[$article->id]) }}"></a></h3>
        <div class="body">
           <h5>{{$article->content}}</h5>
        </div>

    @endforeach
@stop
