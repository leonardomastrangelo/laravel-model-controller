<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Book;

class HomeController extends Controller
{
    public function home()
    {
        $movies = Movie::where('id', '<=', 4)->get();
        $books = Book::where('id', '<=', 4)->get();
        return view("home", compact("movies", "books"));
    }
}
