@extends('layouts.master')
@section('header')
        {{-- <img src="{{ url('/ladro-seattle-logo.jpg') }}" alt=" {{ $roaster->slug }}-logo"> --}}
    <div class="row">
        <div class="xs-col-3">
            <a href="{{ action('RoasterController@index') }}">Back to all roasters</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-6">
            <h1>{{ $roaster->name }}</h1>
            <p>Est. {{ $roaster->established_year->year }}</p>
        </div>
        <div class="col-xs-4 col-md-3">
        <img src="{{ asset('/storage/logos/'.$roaster->logo) }}" alt=" {{ $roaster->slug }}-logo"
            class="img-thumbnail img-rounded">
        </div>
    </div>
@stop
@section('content')
    <div class="row">
        <div class="col-xs-2 col-md-1">
            Location:
        </div>
        <div class="col-xs-8">
            {{ $roaster->city }},
            @if($roaster->state)
                    {{ $roaster->state }},
            @endif
            {{ $roaster->country }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 col-md-1">
            About:
        </div>
        <div class="col-xs-7">
            {{ $roaster->description }}
        </div>
    </div>
    <div class="row">
        <div class="col-xs-2 col-md-1 col-md-offset-1 col-xs-offset-2">
            <a href="{{ $roaster->website_url }}">Website</a>
        </div>
        <div class="col-xs-2 col-md-1">
            <a href="{{ $roaster->store_url }}">Store</a>
        </div>
    </div>
@stop
