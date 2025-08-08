<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }

        $recipes=Recipe::all();
        return view('recipe.index',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
        Recipe::create($request->all());
        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
        $recipe=Recipe::find($id);
        return view('recipe.show',compact('recipe'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
        $recipe=Recipe::find($id);
        return view('recipe.edit',compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RecipeRequest $request, string $id)
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }

        $recipe=Recipe::find($id);
        $recipe->update($request->all());
        return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
        $recipe=Recipe::find($id);

        $recipe->delete();
        return redirect()->route('recipes.index');
    }

    public function deleteAll()
{
    if (!session()->has('user_id')) {
        return redirect('/login')->withErrors(['msg' => 'You Must Login First!']);
        }
    Recipe::query()->delete(); 
    return redirect()->route('recipes.index');
}
}
