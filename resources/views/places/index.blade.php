@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1 align="center" >{{$heading}}</h1>
    <a href="/places/create">New place</a>
</div>

@if(count($places) == 0)
    No places available
@endif

<div class="list-group">
@foreach ($places as $place)
    <a href="/places/{{$place['id']}}" class="list-group-item list-group-item-action">
        <h2>
            {{$place['name']}}
        </h2>
        <p>
            {{$place['description']}}
        </p>
        <small>Last update at {{$place['created_at']}}</small>
    </a>
@endforeach
</div>

{{$places->links()}}
  {{-- <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
  </a> --}}
@endsection