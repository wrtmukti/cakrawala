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

Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('/');
Route::get('/about', [App\Http\Controllers\ProfileController::class, 'about'])->name('about');
Route::get('/award', [App\Http\Controllers\ProfileController::class, 'award'])->name('award');
Route::get('/contact', [App\Http\Controllers\ProfileController::class, 'contact'])->name('contact');
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('[project]');
Route::get('/project/detail/{id}', [App\Http\Controllers\ProjectController::class, 'detail'])->name('detail');
Route::get('/collaboration', [App\Http\Controllers\ProfileController::class, 'collaboration'])->name('collaboration');
