<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        
        $movies = Movie::query()
            ->orderBy('name' , 'desc')
            ->limit(50)
            ->get();

        return view('movies.index', compact('movies'));
    }
}


