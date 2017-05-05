
@extends('app')

{{--@section('content')--}}

    {{--@if($first == 'chai')--}}
    {{--<h1>my name is Chai zhi  one more {{$first}} or {{$last}}</h1>--}}
    {{--@else--}}
    {{--<h1>my age {{$age}}</h1>--}}
    {{--@endif--}}
{{--@stop--}}

@section('footer')
    <h1>this is footer</h1>
    <ul>
        @foreach($nameArr as $name )
        <li>{{$name}}</li>
        @endforeach
    </ul>
@stop




