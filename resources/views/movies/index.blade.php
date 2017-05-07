@extends('layouts.master')

@section('title')
    Movie Index
@endsection

@section('content')

	<h1>All the Movies</h1>

	@foreach($movies as $movie)
		<div class='movie'>
			<h2>{{ $movie['title'] }}</h2>
		</div>
		<div class='cover'>
			<img src="{{ $movie['cover'] }}" alt="{{ $movie['title'] }} Cover">
		</div>
	@endforeach


@endsection