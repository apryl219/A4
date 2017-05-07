{{-- /resources/views/movies/new.blade.php --}}
@extends('layouts.master')

@section('title')
    New movie
@endsection

@section('content')
    <h1>Add a new movie</h1>
    <p>*Required Field</p>
    <form method='POST' action='/movies/new'>
        {{ csrf_field() }}


        <label for='title'>*Title</label>
        <input type='text' name='title' id='title' value='{{ old('title') }}' ><br>
        <label for='title'>Cover Image URL</label>
        <input type='text' name='cover' id='cover' value='{{ old('cover') }}' ><br>
        <label for='title'>Actor</label>
        <input type='text' name='actor' id='actor' value='{{ old('actor') }}' ><br>
        <label for='title'>Genre</label>
        <input type='text' name='genre' id='genre' value='{{ old('genre') }}' ><br>
        <label for='title'>Description</label>
        <input type='text' name='description' id='description' value='{{ old('description') }}' ><br>
        <label for='title'>*Purchase Link</label>
        <input type='text' name='purchase_link' id='purchase_link' value='{{ old('purchase_link') }}' ><br>
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