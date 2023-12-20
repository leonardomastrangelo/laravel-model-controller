<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function home()
    {
        $movies = Movie::where('id', '<=', 4)->get();
        return view("home", compact("movies"));
    }
}
