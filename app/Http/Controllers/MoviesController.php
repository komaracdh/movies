<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movie::all();

        return view('movies.index',compact('movies'));
    }

    public function show($id){
        $movie = Movie::findOrFail($id);

        return view('/movies.show',compact('movie'));
    }

    public function create(){
        return view('movies.create');
    }

    public function store()
    {
       $this->validate(request(), Movie::Store_reles);
        $movie = Movie::create(request()->all());

        return redirect()->route('all-movies');
    }
}
