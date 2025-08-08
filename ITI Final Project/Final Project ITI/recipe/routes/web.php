<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('recipes', RecipeController::class);
//ده بيعملي 7 مسارات كلهم بادءين ب اول كلمه كاتبها وبكتب الكوماند ال بيعملي كونترولر جوه ال7 فانكشنز
//index,store,show,destroy,update,edit
Route::post('/recipes/delete-all', [RecipeController::class, 'deleteAll'])->name('recipes.deleteAll');



//authentication 

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/register',[AuthController::class,'register'])->name('auth.register');
Route::get('/showregister', [AuthController::class,'showregister'])->name('auth.showregister');