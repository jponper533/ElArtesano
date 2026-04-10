<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IngredienteController ;
use App\Http\Controllers\Api\PlatoController ;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::get('/ingredientes', [IngredienteController::class, 'index']);
Route::post('/ingredientes', [IngredienteController::class, 'store']);
Route::get('/ingredientes/{id}', [IngredienteController::class, 'show']);
Route::put('/ingredientes/{id}', [IngredienteController::class, 'update']);
Route::delete('/ingredientes/{id}', [IngredienteController::class, 'destroy']);

Route::get('/platos', [PlatoController::class, 'index']);
Route::post('/platos', [PlatoController::class, 'store']);
Route::get('/platos/{id}', [PlatoController::class, 'show']);
Route::put('/platos/{id}', [PlatoController::class, 'update']);
Route::delete('/platos/{id}', [PlatoController::class, 'destroy']);
