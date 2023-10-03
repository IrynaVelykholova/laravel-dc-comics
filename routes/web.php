<?php

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

Route::get('/', [ComicController::class, 'index'])->name('index');

Route::get('/create', [ComicController::class, 'create'])->name('create');
Route::post('/comics', [ComicController::class, 'store'])->name('store');

//va in fondo per evitare problemi di rotta
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('show');