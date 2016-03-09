<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests;

class BooksController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('pages.books', compact('books'));
        //compact() sends the variable specified as parameters to the view specified
    }
}
