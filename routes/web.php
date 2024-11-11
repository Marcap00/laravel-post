<?php

use App\Http\Controllers\PostController;
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
    return view('pages.home');
})->name('home');

<<<<<<< HEAD
Route::get("/posts/{id}", [PostController::class, "show"])->name("posts.show");
=======
// Index
Route::get('/posts', [PostController::class, 'index'])->name('index');
>>>>>>> be8c37779f15299f7947e3e04f98bc74909cbdf3
