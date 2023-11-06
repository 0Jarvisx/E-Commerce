<?php

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

Route::get('/', [HomeController::class, 'index']) ->name('welcome');

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('register');

Route::post('/logout',[LogoutController::class, 'store']) ->name('logout');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']) ->name('login');

Route::get('/{user:name}', [HomeController::class, 'index']) ->name('registrado');
Route::get('/Dashboard/{user:name}', [DashboardController::class, 'index'])->name('dashboard');