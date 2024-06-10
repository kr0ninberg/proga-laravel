@extends('layout')
@section('content')

@php
$controllerPrefix = '\\App\\Http\\Controllers\\';
@endphp

<h1>New place</h1>

{!! Form::open(['action' => $controllerPrefix.'ThingsController@store']) !!}
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
        {{Form::label('title', 'Waranty till ')}}
        {{-- {{Form::text('wrnt', '', ['class' => 'form-control', 
        'placeholder' => 'date'])}} --}}
        {{Form::date('wrnt', \Carbon\Carbon::now())}}
    </div>
    <div class="form-group">
        {{Form::label('title', 'Created by')}}
        {{-- {{Form::text('creator', '', ['class' => 'form-control', 
        'placeholder' => 'creator name'])}} --}}
        <select class="custom-select" name="creator">
        @foreach ($users as $user)
            <option value={{$user->name}}>{{$user->name}}</option>
        @endforeach
        </select>
    </div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection