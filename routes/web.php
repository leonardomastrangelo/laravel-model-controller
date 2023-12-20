<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
|-> use the static method 'home' of HomeController to view homepage
*/
Route::get('/', [HomeController::class, 'home'])->name('home');

/* 
|-> use the static method 'index' of BookController to take all the movies from the db and to view them in movies.index
*/
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

/* 
|-> use the static method 'show' of BookController to show an element wih a determinated id in movies.show
*/
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
