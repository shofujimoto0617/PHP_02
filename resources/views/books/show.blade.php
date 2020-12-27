@extends('layouts.app')

@section('body')

    @if (session('flash_message'))
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    @endif

    <p>
        <strong>Title:</strong>
        {{ $book['title'] }}     
    </p>
    <p>
        <strong>Body:</strong>
        {{ $book['body'] }}
    </p>
    <a href="{{ action('App\Http\Controllers\BookController@edit', $book['id']) }}">Edit</a>
    |
    <a href="{{ action('App\Http\Controllers\BookController@index') }}">Back</a>

@endsection