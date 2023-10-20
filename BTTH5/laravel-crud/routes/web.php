<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
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

//Route::get('/', function () {
//    return view('index');
//});
Route::get('/',[\App\Http\Controllers\HomeController::class,'getAllAuthors'])->name('home');

//Route::resource('authors',AuthorController::class);
//Route::resource('books',BookController::class);

Route::prefix('/book')->group(function () {
//    Route::get('show/{id}', [\App\Http\Controllers\AuthorController::class,'show'])->name('authors.show');
    Route::get('/',[\App\Http\Controllers\BookController::class,'index'])->name('book.index');
    Route::get('create', [\App\Http\Controllers\BookController::class,'create'])->name('book.create');
    Route::post('store', [\App\Http\Controllers\BookController::class,'store'])->name('book.store');

    Route::get('/edit/{id}', [\App\Http\Controllers\BookController::class,'edit'])->name('book.edit');
    Route::put('/update/{id}', [\App\Http\Controllers\BookController::class,'update'])->name('book.update');

    Route::delete('/delete/{id}', [\App\Http\Controllers\BookController::class,'destroy'])->name('book.delete');

});

Route::prefix('/author')->group(function () {
//    Route::get('show/{id}', [\App\Http\Controllers\AuthorController::class,'show'])->name('authors.show');

    Route::get('create', [\App\Http\Controllers\HomeController::class,'create'])->name('author.create');
    Route::post('store', [\App\Http\Controllers\HomeController::class,'store'])->name('author.store');

    Route::get('/edit/{id}', [\App\Http\Controllers\HomeController::class,'edit'])->name('author.edit');
    Route::put('/update/{id}', [\App\Http\Controllers\HomeController::class,'update'])->name('author.update');

    Route::delete('/delete/{id}', [\App\Http\Controllers\HomeController::class,'delete'])->name('author.delete');

});
