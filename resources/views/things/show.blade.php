@extends('layout')
@section('content')

<a href="/things/{{$thing['id']}}" class="list-group-item list-group-item-action">
    <h2>
        {{$thing['name']}}
    </h2>
    <p>
        {{$thing['description']}}
    </p>
</a>
  {{-- <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
  </a> --}}
@endsection