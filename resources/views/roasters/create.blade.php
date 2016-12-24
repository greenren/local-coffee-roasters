@extends('layouts.master')
@section('header')
    <h1>Add a new coffee roaster</h1>
@stop
@section('content')
    {!! Form::open(['method' => 'POST', 'action' => 'RoasterController@store', 'files' => true]) !!}
        @include('roasters.partials.form', ['submitButtonText' => 'Add'])
    {!! Form::close() !!}
@stop
