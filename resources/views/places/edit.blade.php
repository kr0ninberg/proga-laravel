@extends('layouts.app')
@section('content')

@php
$controllerPrefix = '\\App\\Http\\Controllers\\';
@endphp

<h1>Edit place</h1>

{!! Form::open(['action' => [$controllerPrefix.'PlacesController@update', $place['id']]]) !!}
    <div class="form-group">
        {{Form::label('title', 'Name')}}
        {{Form::text('name', $place['name'], ['class' => 'form-control', 
        'placeholder' => 'place name'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Description')}}
        {{Form::textarea('description', $place['description'], ['class' => 'form-control', 
        'placeholder' => 'desription text'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Is repair place')}}
        {{-- {{Form::text('repair', '', ['class' => 'form-control', 
        'placeholder' => 'true/false'])}} --}}
        {{Form::checkbox('repair', $place['repair'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Is work place')}}
        {{-- {{Form::text('work', '', ['class' => 'form-control', 
        'placeholder' => 'true/false'])}} --}}
        {{Form::checkbox('work', $place['work'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection