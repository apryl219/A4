@extends('layouts.master')

{{--Adds a different style sheet or script to specific page--}}
@push('head')
	<link href="/css/movies/show.css" rel="stylesheet">
@endpush

@section('title')
	show movie: {{ $title }}
@endsection

@section('nav')
	@include('movies.nav')
@endsection

@section('content')
	<h1>show movie: {{ $title }}</h1>
@endsection