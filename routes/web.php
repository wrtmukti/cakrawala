<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('/');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\HomeController::class, 'test']);


// MENU
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/perumahan', [App\Http\Controllers\PerumahanController::class, 'index'])->name('perumahan');
Route::get('/perumahan/{id}', [App\Http\Controllers\PerumahanController::class, 'index'])->name('detail');
Route::get('/testimoni', [App\Http\Controllers\TestimoniController::class, 'index'])->name('testimoni');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
