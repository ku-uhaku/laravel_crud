<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\CumputersController;

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
// Path: app\Http\Controllers\StaticController.php
Route::get('/', [StaticController::class, 'index'])->name('home.index');
Route::get('/about', [StaticController::class, 'about'])->name('home.about');
Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');
///////////////////////////////////////////
// Path: app\Http\Controllers\CumputersController.php

Route::resource('/computers', CumputersController::class);
