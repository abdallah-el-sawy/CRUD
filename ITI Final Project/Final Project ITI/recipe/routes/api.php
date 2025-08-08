<?php

use App\Http\Controllers\Api\FavouriteApiController;
use App\Http\Controllers\Api\RecipeApiController;
use App\Http\Controllers\FavouriteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




//Display the chef`s recipes
Route::get('/recipes', [RecipeApiController::class, 'index']);

//Add recipes to his favorites.
Route::post('/favourites', [FavouriteApiController::class, 'store']);

//View his favorites.
Route::get('/favourites/{device_id}', [FavouriteApiController::class, 'show']);

//Delete from his favourites
Route::delete('/favourites/{device_id}/{recipe_id}', [FavouriteApiController::class, 'destroy']);


