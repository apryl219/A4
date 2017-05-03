{{-- /resources/views/movies/new.blade.php --}}
@extends('layouts.master')

@section('title')
    New movie
@endsection

@section('content')
    <h1>Add a new movie</h1>

    <form method='POST' action='/movies/new'>
        {{ csrf_field() }}

        <label for='title'>Title</label>
        <input type='text' name='title' id='title' value='{{ old('title') }}' >
        <input type='submit' value='Add movie'>
    </form>
	@if(count($errors) > 0)
	    <ul>
	        @foreach ($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>
	@endif
@endsection