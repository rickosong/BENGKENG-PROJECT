<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BengkelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', [HomeController::class, 'index'])->name('landing')->middleware('guest');
Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('/bengkelterdekat', [HomeController::class, 'bengkelterdekat'])->name('bengkelterdekat')->middleware('auth');
Route::get('/caribengkel', [HomeController::class, 'caribengkel'])->name('caribengkel')->middleware('auth');
Route::get('/bengkelpost', [HomeController::class, 'post'])->name('post')->middleware('auth');

// Profile User
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/editprofile/{user:id}', [ProfileController::class, 'update'])->name('editprofile')->middleware('auth');
Route::put('/updateprofile/{user:id}', [ProfileController::class, 'create'])->name('updateprofile');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('authlogin');

// Admin Bengkel Page