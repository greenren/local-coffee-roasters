@extends('layouts.master')
@section('header')
    <h1>Reviews</h1>
@stop
@section('content')
    @include('reviews.partials.reviews', ['noReviewsMessage' => "Could not find any reviews."])
@stop
