@extends('layout')
@section('content')

@php
$controllerPrefix = '\\App\\Http\\Controllers\\';
@endphp

<h1>New place</h1>

{!! Form::open(['action' => $controllerPrefix.'PlacesController@store']) !!}
    <div class="form-group">
        {{Form::label('title', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 
        'placeholder' => 'place name'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 
        'placeholder' => 'desription text'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Is repair place')}}
        {{Form::text('repair', '', ['class' => 'form-control', 
        'placeholder' => 'true/false'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Is work place')}}
        {{Form::text('work', '', ['class' => 'form-control', 
        'placeholder' => 'true/false'])}}
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection