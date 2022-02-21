<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function movies()
    {
        $results = DB::select('
        SELECT *
        FROM `movies`
        ORDER BY `rating` DESC
        LIMIT 50
        ');

        return view(
            'top_rated_movies.top-rated-movies', 
            [
            'top_movies' => $results
            ]
        );
    }

}
