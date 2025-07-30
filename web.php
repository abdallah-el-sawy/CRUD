<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
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

//basic one
Route::get('/', function () {
    return view('welcome');
});


//task

//home
Route::get('/home', function () {
    return view('home');
});

//about
Route::get('/about', function () {
    return view('about');
});

//contact
Route::get('/contact', function () {
    return view('contact');
});




    // return view('employees' , compact('employees'));

    // controller link between model and view and i can type the logic in it 
    
    // elmafrood ndos ctrl + space 3la el controller name b3deen ngeeb el namespace bta3o

    // put,patch,delete,post

    //lw 3ayez laravel tktbely el functions kolha nekteb f el terminal /* php artisan make:controller ExamController -r */

    //---------------------------------------------------

    //task2
    
    Route::get('/categories' , [CategoryController :: class , 'index']);

    Route::get('/categories/create',[CategoryController::class,'create']);

    Route::post('/categories', [CategoryController::class, 'store']);

    Route::get('/categories/{id}',[CategoryController::class , 'show']);

    Route::get('/categories/{id}/edit' , [CategoryController::class,'edit']);

    Route::put('/categories/{id}', [CategoryController::class, 'update']);

    Route::put('/categories/{id}', [CategoryController::class, 'destroy']); 

//--------------------------------------------------------------------

    Route::get('/products',[ProductController::class,'index']);

    Route::get('/products/create',[ProductController::class,'create']);

    Route::post('/products',[ProductController::class,'store']);

    Route::get('/products/{id}',[ProductController::class,'show']);

    Route::get('/products/{id}/edit',[ProductController::class,'edit']);

    Route::put('/products/{id}',[ProductController::class,'update']);

    Route::delete('/products/{id}',[ProductController::class,'destroy']);

//----------------------------------------------------------------------------------------


    Route::get('/movies',[MovieController::class,'index']) -> name('movies.index');

    Route::get('/movies/create',[MovieController::class,'create']);

    Route::post('/movies',[MovieController::class,'store']);

    Route::get('/movies/{id}',[MovieController::class,'show']);

    Route::get('/movies/{id}/edit',[MovieController::class,'edit']);

    Route::put('/movies/{id}',[MovieController::class,'update']);

    Route::delete('/movies/{id}',[MovieController::class,'destroy']);



//------------------------------------------------------------------------------------------------

    Route::get('/books',[BookController::class,'index']) -> name('books.index');

    Route::get('/books/create',[BookController::class,'create']);

    Route::post('/books',[BookController::class,'store']);

    Route::get('/books/{id}',[BookController::class,'show']);

    Route::get('/books/{id}/edit',[BookController::class,'edit']);

    Route::put('/books/{id}',[BookController::class,'update']);

    Route::delete('/books/{id}',[BookController::class,'destroy']);

