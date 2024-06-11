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
<a href="/things/{{$thing['id']}}/edit" class='btn btn-primary'>Edit</a>

@php
$controllerPrefix = '\\App\\Http\\Controllers\\';
@endphp

{!! Form::open(['action' => [$controllerPrefix.'ThingsController@destroy', $thing['id']]]) !!}
    {{Form::hidden('_method' , 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!! Form::close() !!}

  {{-- <a href="#" class="list-group-item list-group-item-action active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Some placeholder content in a paragraph.</p>
    <small>And some small print.</small>
  </a> --}}
@endsection