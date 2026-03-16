<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProyectoController ;
use App\Http\Controllers\Api\PeliculaController ;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/proyectos', [ProyectoController::class, 'index']);
Route::post('/proyectos', [ProyectoController::class, 'store']);
Route::get('/peliculas', [PeliculaController::class, 'index']);
Route::post('/peliculas', [PeliculaController::class, 'store']);
