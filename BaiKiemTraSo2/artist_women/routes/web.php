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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\HomeController::class,'getAllArtworks'])->name('home');


Route::prefix('/artwork')->group(function () {
//    Route::get('show/{id}', [\App\Http\Controllers\\App\Http\Controllers\\App\Http\Controllers\ArtworkController::class,'show'])->name('artworks.show');

    Route::get('create', [\App\Http\Controllers\ArtworkController::class,'create'])->name('artwork.create');
    Route::post('store', [\App\Http\Controllers\ArtworkController::class,'store'])->name('artwork.store');

    Route::get('/edit/{id}', [\App\Http\Controllers\ArtworkController::class,'edit'])->name('artwork.edit');
    Route::put('/update/{id}', [\App\Http\Controllers\ArtworkController::class,'update'])->name('artwork.update');

    Route::delete('/delete/{id}', [\App\Http\Controllers\ArtworkController::class,'delete'])->name('artwork.delete');

});
