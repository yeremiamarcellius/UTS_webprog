<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        //
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function showById($id)
    {
        //
        $book = Book::findOrFail($id);
        return view('detailBook', compact('book'));
    }
}
