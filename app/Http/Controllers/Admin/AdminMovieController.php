<?php

namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminMovieController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Movies - Movie Review";
        $viewData["movies"] = Movie::all();
        return view('admin.movie.index')->with("viewData", $viewData);
    }
    
    public function store(Request $request)
    {
        Movie::validate($request);

        $newMovie = new Movie();
        $newMovie->setName($request->input('name'));
        $newMovie->setDescription($request->input('description'));
        $newMovie->setImage('movie.png');
        $newMovie->save();

        if($request->hasFile('image')) {
            $imageName = $newMovie->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newMovie->setImage($imageName);
            $newMovie->save();
        }

        return back();
    }
    
    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Edit Info - Movie Review";
        $viewData["movie"] = Movie::findOrFail($id);
        return view('admin.movie.edit')->with("viewData", $viewData);
    } 

    public function update(Request $request, $id)
    {
        Movie::validate($request);
        
        $movie = Movie::findOrFail($id);
        $movie->setName($request->input('name'));
        $movie->setDescription($request->input('description'));

        if($request->hasFile('image')) {
            $imageName = $movie->getId().".".$request->file('image')->extension();
            Storage::disk('public')->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $movie->setImage($imageName);
        }
        $movie->save();
        return redirect()->route('admin.movie.index');
    }

    
    public function delete($id)
    {
        Movie::destroy($id);
        return back();
    }
}