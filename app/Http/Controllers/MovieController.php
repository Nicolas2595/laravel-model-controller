<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller

{
    public function index() {
        $title = "MOVIES";

        // SELECT * FROM `movies`;
        $movies = Movie::all();

        // SELECT * FROM `movies` WHERE `title` = 'Il Padrino'
        // $movies = Movie::where('title', 'Il Padrino') ->get();

        // SELECT * FROM `movies` WHERE `vote` < 9 or > 10
        // $movies = Movie::where('vote', '<', 8)
        // ->orwhere('vote', '>', 9)
        // ->orderby('vote', 'ASC')
        // ->get();

        return view('home', compact('title', 'movies'));
    }
}
