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
        // validation
        $rules = [
            'title' => ['required', 'string'],
            'body' => ['required', 'string']
        ];
        $this->validate($request, $rules);


        $book = new Book();
        $book['title'] = $request['title'];
        $book['body'] = $request['body'];
        $book->save();
        session()->flash('flash_message', 'Book was successfully created.');

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

        // validation
        $rules = [
            'title' => ['required', 'string'],
            'body' => ['required', 'string']
        ];
        $this->validate($request, $rules);

        $book = Book::findOrFail($request['id']);
        $book['title'] = $request['title'];
        $book['body'] = $request['body'];
        $book->save();

        session()->flash('flash_message', 'Book was successfully updated.');
        return redirect(route('book_show', ['id' => $book]));
    }

    public function delete(Request $request)
    {
        Book::find($request['id'])->delete();

        session()->flash('flash_message', 'Book was successfully destroyed.');
        return redirect(route('book_index'));
    }
}
