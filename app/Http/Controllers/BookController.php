<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //BookController
    public function index()
    {
        return view('books.index');
    }

    public function create(Request $request)
    {
        $book = new Book();
        $book['title'] = $request['title'];
        $book['body'] = $request['body'];
        $book->save();

        return redirect(route('book_index'));
    }
}
