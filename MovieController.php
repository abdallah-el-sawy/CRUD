<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', ['movies' => $movies]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect()->route('movies.index');
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movies.show',compact('movie'));
    }

    public function edit($id)
    {
        $movie = Movie::find($id);
        return view('movies.edit' , compact('movie'));

    }

    public function update(Request $request,$id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return redirect()->route('movies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect()->route('movies.index');

    }



}
