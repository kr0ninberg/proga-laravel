@extends('layout')
@section('content')

@php
$controllerPrefix = '\\App\\Http\\Controllers\\';
@endphp

<h1>Edit thing</h1>

{!! Form::open(['action' => [$controllerPrefix.'ThingsController@update', $thing['id']]]) !!}
    <div class="form-group">
        {{Form::label('title', 'Name')}}
        {{Form::text('name', $thing['name'], ['class' => 'form-control', 
        'placeholder' => 'thing name'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Description')}}
        {{Form::textarea('description', $thing['description'], ['class' => 'form-control', 
        'placeholder' => 'desription text'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Waranty till ')}}
        {{-- {{Form::text('wrnt', '', ['class' => 'form-control', 
        'placeholder' => 'date'])}} --}}
        {{Form::date('wrnt', $thing['wrnt'])}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Created by')}}
        {{-- {{Form::text('creator', '', ['class' => 'form-control', 
        'placeholder' => 'creator name'])}} --}}
        <select class="custom-select" name="creator">
        @foreach ($users as $user)
            @if($thing['creator'] == $user->name)
                <option value={{$user->name}} selected>{{$user->name}}</option>
            @else
                <option value={{$user->name}}>{{$user->name}}</option>
            @endif
        @endforeach
        </select>
    </div>

    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection