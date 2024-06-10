@extends('layout')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <h1 align="center" >{{$heading}}</h1>
    <a href="/things/create">New thing</a>
</div>

@if(count($things) == 0)
    No things available
@endif

@foreach ($things as $thing)
    <a href="/things/{{$thing['id']}}" class="list-group-item list-group-item-action">
        <h2>
            {{$thing['name']}}
        </h2>
        <p>
            {{$thing['description']}}
        </p>  
        <small>Last update at {{$thing['created_at']}}</small>
    </a>
@endforeach
{{$things->links()}}
@endsection