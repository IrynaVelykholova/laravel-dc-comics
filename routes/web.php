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

// CREATE
Route::get('/create', [ComicController::class, 'create'])->name('create');
Route::post('/comic', [ComicController::class, 'store'])->name('store');

// READ
Route::get('/', [ComicController::class, 'index'])->name('index');
Route::get('/comic/{id}', [ComicController::class, 'show'])->name('show');

// UPDATE
Route::get('/comic/{id}/edit', [ComicController::class, 'edit'])->name('edit');
Route::put('/comic/{id}', [ComicController::class, 'update'])->name('update');

// DESTROY
Route::delete('/comic/{id}', [ComicController::class, 'destroy'])->name('destroy');