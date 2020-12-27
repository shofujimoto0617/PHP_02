<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/books', [BookController::class, 'index'])->name('book_index');
Route::post('/create', [BookController::class, 'create'])->name('book_create');
Route::get('/show/{id}', [BookController::class, 'show'])->name('book_show');
Route::get('/edit/{id}', [BookController::class, 'edit'])->name('book_edit');
Route::post('/update/{id}', [BookController::class, 'update'])->name('book_update');
