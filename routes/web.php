<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu',[MenuController::class,'index']);

Route::get('/profil',[profileController::class,'index']);

Route::get('/layanan',[LayananController::class,'index']);

Route::get('/kontak',[KontakController::class,'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
