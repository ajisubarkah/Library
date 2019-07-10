<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('index')->with(['books' => $book]);
    }
}
