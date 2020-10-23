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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(); 

Route::middleware('role:pengunjung')->get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::middleware('role:admin|surveyor')->get('/dashboard', [App\Http\Controllers\ProductController::class, 'index'])->name('dashboard');
Route::middleware('role:admin|surveyor')->get('/dashboard/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::middleware('role:admin|surveyor')->post('/dashboard/store', [App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::middleware('role:admin|surveyor')->post('/dashboard/update', [App\Http\Controllers\ProductController::class, 'update'])->name('update');
