@extends('layouts.master')
@section('header')
    <h1>Update {{ $roaster->name }}</h1>
@stop
@section('content')
    {!! Form::model($roaster, ['method' => 'PATCH', 'action' => ['RoasterController@update', $roaster->id], 'files' => true]) !!}
        @include('roasters.partials.form', ['submitButtonText' => 'Update'])
    {!! Form::close() !!}
@stop
