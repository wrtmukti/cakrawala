<?php

use Illuminate\Support\Facades\Auth;
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

// Auth::routes();

// Profile
Route::get('/', [App\Http\Controllers\ProfileController::class, 'index'])->name('/');
Route::get('/about', [App\Http\Controllers\ProfileController::class, 'about'])->name('about');
Route::get('/award', [App\Http\Controllers\ProfileController::class, 'award'])->name('award');
Route::get('/contact', [App\Http\Controllers\ProfileController::class, 'contact'])->name('contact');
Route::get('/collaboration', [App\Http\Controllers\ProfileController::class, 'collaboration'])->name('collaboration');
Route::post('/specialOffer', [App\Http\Controllers\ProfileController::class, 'specialOffer'])->name('specialOffer');
// Project
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/project/detail/{id}', [App\Http\Controllers\ProjectController::class, 'detail'])->name('detail');
Route::get('/download-brochures/{id}', [App\Http\Controllers\ProjectController::class, 'downloadBrochures'])->name('download-brochures');
// Admin
Route::get('/admincakrawaladuaribuduapuluhempat', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('admincakrawaladuaribuduapuluhempat');
Route::post('/loginaction', [App\Http\Controllers\Auth\LoginController::class, 'loginAction'])->name('loginaction');
Route::get('/logoutaction', [App\Http\Controllers\Auth\LoginController::class, 'logoutAction'])->name('logoutaction')->middleware('auth');
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard')->middleware('auth');

Route::get('/admin/project', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('admin-project')->middleware('auth');
Route::get('/admin/project/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('admin-project-create')->middleware('auth');
Route::post('/admin/project/store', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('admin-project-store')->middleware('auth');
Route::get('/admin/project/edit/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('admin-project-edit')->middleware('auth');
Route::post('/admin/project/update', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('admin-project-update')->middleware('auth');
Route::get('/admin/project/imgedit/{id}/{page}', [App\Http\Controllers\Admin\ProjectController::class, 'imageEdit'])->name('admin-project-img-edit')->middleware('auth');
Route::post('/admin/project/imgupdate', [App\Http\Controllers\Admin\ProjectController::class, 'imageUpdate'])->name('admin-project-img-update')->middleware('auth');
Route::get('/admin/project/delete/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'delete'])->name('admin-project-delete')->middleware('auth');
Route::get('/admin/project/img-delete/{id}/{page}', [App\Http\Controllers\Admin\ProjectController::class, 'imageDelete'])->name('admin-project-img-delete')->middleware('auth');

Route::get('/admin/collaboration', [App\Http\Controllers\Admin\CollaborationController::class, 'index'])->name('admin-collaboration')->middleware('auth');
Route::get('/admin/collaboration/create', [App\Http\Controllers\Admin\CollaborationController::class, 'create'])->name('admin-collaboration-create')->middleware('auth');
Route::post('/admin/collaboration/store', [App\Http\Controllers\Admin\CollaborationController::class, 'store'])->name('admin-collaboration-store')->middleware('auth');
Route::get('/admin/collaboration/delete/{id}', [App\Http\Controllers\Admin\CollaborationController::class, 'delete'])->name('admin-collaboration-delete')->middleware('auth');

Route::get('/admin/award', [App\Http\Controllers\Admin\AwardController::class, 'index'])->name('admin-award')->middleware('auth');
Route::get('/admin/award/create', [App\Http\Controllers\Admin\AwardController::class, 'create'])->name('admin-award-create')->middleware('auth');
Route::post('/admin/award/store', [App\Http\Controllers\Admin\AwardController::class, 'store'])->name('admin-award-store')->middleware('auth');
Route::get('/admin/award/delete/{id}', [App\Http\Controllers\Admin\AwardController::class, 'delete'])->name('admin-award-delete')->middleware('auth');

Route::get('/admin/companybio', [App\Http\Controllers\Admin\CompanybioController::class, 'index'])->name('admin-companybio')->middleware('auth');
Route::post('/admin/companybio/update', [App\Http\Controllers\Admin\CompanybioController::class, 'update'])->name('admin-companybio-update')->middleware('auth');

