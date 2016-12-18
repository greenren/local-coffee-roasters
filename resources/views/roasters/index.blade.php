@extends('layouts.master')
@section('header')
    <h1>Local Coffee Roasters</h1>
@stop
@section('content')
    <ul class="list-unstyled">
        @foreach($roasters as $roaster)
            <li>
                <h2>{{ $roaster->name }}</h2>
                <p>{{ $roaster->city }}, {{ $roaster->state }}, {{ $roaster->country }}</p>
            </li>
        @endforeach
    </ul>
@stop
