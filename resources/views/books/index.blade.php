@extends('layouts.app')

@section('body')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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
                    <td><a href="{{ action('App\Http\Controllers\BookController@show', $book['id']) }}" class="btn btn-info">Show</a></td>
                    <td><a href="{{ action('App\Http\Controllers\BookController@edit', $book['id']) }}" class="btn btn-success">Edit</a></td>
                    <td>
                        <form method="post" action="/delete/{{ $book['id'] }}">
                            {{ csrf_field() }}
                            <input type="submit" value="Destroy" class="btn btn-danger">
                        </form>
                    </td>
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
            <input type="submit" value="create book" class="btn btn-primary">
        </div>
        <!-- <div class="actions">
            <input type="submit" value="create book">
        </div> -->

    </form>
@endsection