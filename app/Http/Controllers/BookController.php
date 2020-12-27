<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //BookController
    public function index()
    {
        $books = Book::all();

        return view('books.index',['books'=>$books]);
    }

    public function create(Request $request)
    {
        $book = new Book();
        $book['title'] = $request['title'];
        $book['body'] = $request['body'];
        $book->save();

        return redirect(route('book_show', ['id' => $book]));
    }

    public function show(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        return view('books.show',['book'=>$book]);
    }

    public function edit(Request $request, $id, Book $book)
    {
        $book = Book::find($id);

        return view('books.edit', ['book'=>$book]);
    }

    public function update(Request $request)
    {
        // $book = Book::find($id);
        // $book->title = $request->title;
        // $book->body = $request->body;
        // $book->save();
        // $book_get_query = Book::find($id);
        // $book_info = $book_get_query->find($request['id']);
        // $book_info->book['title'] = $request['title'];
        // $book_info->book['body'] = $request['body'];
        // $book_info->save();

        $book = Book::findOrFail($request['id']);
        $book['title'] = $request['title'];
        $book['body'] = $request['body'];
        $book->save();

        return redirect(route('book_index'));
    }
}
