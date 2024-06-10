@extends('layout')
@section('content')
<h1>{{$heading}}</h1>

@if(count($places) == 0)
    No places available
@endif

@foreach ($places as $place)
<h2>
    {{$place['name']}}
</h2>
<p>
    {{$place['description']}}
</p>
@endforeach
@endsection