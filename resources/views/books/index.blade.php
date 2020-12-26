@extends('layouts.app')

@section('body')
    <h1>Books</h1>
    <h2>New book</h2>
    <form action="{{ url('create') }}" method="post">
        @csrf
        <div class="field">
            <label for="title">Title</label><br>
            <input id="title" type="text" class="book_title" name="title">
        </div>
        <div class="field">
            <label for="body">Body</label><br>
            <textarea class="book_body" name="body" id="body" cols="20" rows="3"></textarea><br><br>
            <input type="submit" value="create book">
        </div>
        <!-- <div class="actions">
            <input type="submit" value="create book">
        </div> -->

    </form>