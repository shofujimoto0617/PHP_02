@extends('layouts.app')

@section('body')
    <h1>Editing Book</h1>
    <form action="{{ route('book_update',$book->id) }}" method="post">
        @csrf
        <div class="field">
            <label for="title">Title</label><br>
            <input type="text" class="book_title" name="title" value="{{ $book['title'] }}">
        </div>
        <div class="field">
            <label for="body">Body</label><br>
            <textarea class="book_body" name="body" id="body" cols="20" rows="3">{{ $book['body'] }}</textarea><br><br>
            <input type="submit" value="create book">
        </div>
    </form>
@endsection