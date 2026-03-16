<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('alquileres', AlquilerController::class);
    Route::resource('peliculas', PeliculaController::class);
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::resource('alquileres', AlquilerController::class);
Route::resource('peliculas', PeliculaController::class);
Route::resource('users', UserController::class);