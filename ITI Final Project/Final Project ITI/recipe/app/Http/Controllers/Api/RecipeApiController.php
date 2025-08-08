<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeApiController extends Controller
{
    public function index()
    {
        $recipe = Recipe::all();
        return response()->json([
            'msg' => 'Success',
            'Data' => RecipeResource::collection($recipe)

        ]);
        
    }


    
}
