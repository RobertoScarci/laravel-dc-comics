<?php

use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\ComicController;
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
    return view('home');
});

Route::get('/comics', [ComicController::class, 'index'])->name('pages.comics');
Route::post('/comics', [GuestComicController::class, 'store'])->name('pages.store');
Route::get('/comics/create', [GuestComicController::class, 'create'])->name('pages.create');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('pages.show');
Route::put('/comics/{comic}', [GuestComicController::class, 'update'])->name('pages.update');
Route::get('/comics/{comic}/edit', [GuestComicController::class, 'edit'])->name('pages.edit');
