@extends('layouts.master')
@section('header')
    <h1>Local Coffee Roasters</h1>
@stop
@section('content')
    @if (count($roasters))
        <ul class="list-unstyled">
            @foreach($roasters as $roaster)
                <li>
                    <h2>
                        <a href="{{ url('roaster', $roaster->slug) }}">{{ $roaster->name }}</a>
                    </h2>
                    <p>{{ $roaster->city }}, {{ $roaster->state }}, {{ $roaster->country }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>Could not find any local coffee roasters.</p>
    @endif
@stop
