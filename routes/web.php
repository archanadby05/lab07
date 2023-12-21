<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Define a route for the home page, pointing to the index method of HomeController
Route::get('/', [HomeController::class, 'index']);

// Define a route for the articles page, pointing to the index method of ArticlesController
Route::get('/articles', [ArticlesController::class, 'index']);
