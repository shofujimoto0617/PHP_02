@extends('layouts.app')

@section('body')
    <h1>Books</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Body</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['body'] }}</td>
                    <td><a href="{{ action('App\Http\Controllers\BookController@show', $book['id']) }}">Show</a></td>
                    <td><a href="{{ action('App\Http\Controllers\BookController@edit', $book['id']) }}">Edit</a></td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
@endsection