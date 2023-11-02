<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $viewData=[];
        $viewData["title"]="Films - Movie Review";
        $viewData["subtitle"]="List of movies";
        $viewData["movies"]=Movie::all();
        return view('movie.index')->with("viewData", $viewData);
    }
    
    public function show($id)
    {
        $viewData=[];
        $movie = Movie::findOrFail($id);
        $viewData["title"]=$movie->getName()." - Movie Review";
        $viewData["subtitle"]=$movie->getName()." - Movie Information";
        $viewData["movie"]=$movie;
        return view('movie.show')->with("viewData", $viewData);
    }
}