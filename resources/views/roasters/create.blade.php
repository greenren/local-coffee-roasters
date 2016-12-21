@extends('layouts.master')
@section('header')
    <h1>Add a new coffee roaster</h1>
@stop
@section('content')
    {!! Form::open(['method' => 'POST', 'action' => 'RoasterController@store']) !!}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name of coffee roaster') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            {!! Form::label('city', 'City') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('city') }}</small>
        </div>

        <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
            {!! Form::label('state', 'State (optional)') !!}
            {!! Form::select('state', $options, $selected_value, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('state') }}</small>
        </div>

        <div class="form-group{{ $errors->has('established_year') ? ' has-error' : '' }}">
            {!! Form::label('established_year', 'Year established') !!}
            {!! Form::selectYear('established_year', date('Y'), date('Y') - 100, null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('established_year') }}</small>
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'About') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
            <small class="text-danger">{{ $errors->first('description') }}</small>
        </div>


        <div class="btn-group">
            {!! Form::submit("Add", ['class' => 'btn btn-primary']) !!}
            {!! Form::reset("Reset", ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@stop
