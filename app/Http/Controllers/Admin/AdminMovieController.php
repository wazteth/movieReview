<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Movies - Movie Review";
        $viewData["movies"] = Movie::all();
        return view('admin.movie.index')->with("viewData", $viewData);
    }
}