<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

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

Route::get('/Dashboard/{user:name}/users', [DashboardController::class, 'detailsUser'])->name('detallesUser');
Route::get('/Dashboard/{user:name}/productos', [DashboardController::class, 'detailsProducto'])->name('detallesProducto');
Route::get('/Dashboard/{user:name}/ordens', [DashboardController::class, 'detailsOrden'])->name('detallesOrdens');
Route::get('/Dashboard/{user:name}/categoria', [DashboardController::class, 'detailsCategoria'])->name('detallesCategoria');