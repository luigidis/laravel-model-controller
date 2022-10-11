<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function show($id) {

        $movie = Movie::findOrFail($id);
        // dd($movie);

        return view('movies.show', compact('movie'));

    }
}
