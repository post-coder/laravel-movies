<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        // prenderà i dati dalla tabella del db
        // li salverà in un array
        $movies = Movie::all();

        // dd($movies);

        // li passerò alla view
        

        return view('home', compact('movies'));
    }
}
