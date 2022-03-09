<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{

    public function index()
    {
        // $query_builder = Movie::query();
        // $query_builder->orderBy('rating', 'desc');
        // $query_builder->limit(50);
        // $query_builder->where('movie_type_id', 1);


        // $results = $query_builder->get();
        $movies = Movie::limit(50)
            ->where('votes_nr', '>',5000)
            ->orderby('rating', 'desc')
            ->where('movie_type_id',1)
            ->get();        

        return view('movie.index',compact('movies'));

    }


    public function create()
    {
        return view('movie.form');
    }


    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        // dd($movie->people);
        
        return view('movie.show', compact('movie'));
    }


    public function store(Request $request)
    {
        //getting data from the form using Movie class. 
        $movie  = new Movie();
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();


        return redirect()->action('MovieController@show', ['id' => $movie->id]);
    }

    public function delete($id)
    {

        $movie = Movie::findOrFail($id);
        $movie->delete();


        session()->flash('success_message', 'The comment was successfully deleted!');

        return redirect()->action('MovieController@index');
        
        


    }

  
    
    
    

}
