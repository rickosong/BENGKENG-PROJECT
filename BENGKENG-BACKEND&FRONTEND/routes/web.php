<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

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

// User Page
Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/bengkelterdekat', [HomeController::class, 'bengkelterdekat'])->name('bengkelterdekat');
Route::get('/caribengkel', [HomeController::class, 'caribengkel'])->name('caribengkel');
Route::get('/bengkelpost', [HomeController::class, 'post'])->name('post');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Admin Bengkel Page