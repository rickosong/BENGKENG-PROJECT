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
Route::get('/semuabengkel', [HomeController::class, 'semuabengkel'])->name('semuabengkel')->middleware('auth');
Route::post('/caribengkel', [HomeController::class, 'caribengkel'])->name('caribengkel')->middleware('auth');
Route::get('/bengkelpost/{bengkel:id}', [HomeController::class, 'post'])->name('post')->middleware('auth');
Route::post('/reviewbengkel/{bengkel:id}', [HomeController::class, 'postreview'])->name('uploadreview');

// Profile User
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::get('/editprofile/', [ProfileController::class, 'edit'])->name('editprofile')->middleware('auth');
Route::put('/updateprofile/', [ProfileController::class, 'update'])->name('updateprofile');

// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/cek-login', [AuthController::class, 'storeLogin'])->name('authlogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/upload-register', [RegisterController::class, 'store'])->name('storeregister');
Route::get('daftarbengkel', [BengkelController::class, 'create'])->name('daftarbengkel')->middleware('auth');
Route::post('buat-bengkel', [BengkelController::class, 'store'])->name('buatbengkel');
Route::get('/searchemail', [ForgotPasswordController::class, 'index'])->name('searchemail')->middleware('guest');
Route::post('/forgotpassword', [ForgotPasswordController::class, 'edit'])->name('forgotpassword')->middleware('guest');
Route::put('/changepassword/{user:id}', [ForgotPasswordController::class, 'update'])->name('changepassword');

// Admin Bengkel Page
Route::get('dashboardbengkel', [BengkelController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('bengkelreview', [BengkelController::class, 'review'])->name('dashboardReview')->middleware('auth');
Route::get('pengaturan/{bengkel:id}', [BengkelController::class, 'edit'])->name('settings')->middleware('auth');
Route::put('update-settings/{bengkel:id}', [BengkelController::class, 'update'])->name('updatesettings');
Route::delete('deletebengkel/{bengkel:id}', [BengkelController::class, 'destroy'])->name('deletesettings');