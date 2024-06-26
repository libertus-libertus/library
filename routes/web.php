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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catalog', [App\Http\Controllers\CatalogController::class, 'index'])->name('home');
Route::get('/author', [App\Http\Controllers\AuthorController::class, 'index'])->name('home');
Route::get('/publisher', [App\Http\Controllers\PublisherController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\BookController::class, 'index'])->name('home');
