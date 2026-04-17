<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IngredienteController;
use App\Http\Controllers\Api\PlatoController;
use App\Http\Controllers\Api\AuthController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
      
Route::get('/platos', [PlatoController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/platos', [PlatoController::class, 'store']);
    Route::delete('/platos/{id}', [PlatoController::class, 'destroy']);
    Route::post('/ingredientes', [IngredienteController::class, 'store']);
    Route::delete('/ingredientes/{id}', [IngredienteController::class, 'destroy']);
});
  
Route::get('/ingredientes', [IngredienteController::class, 'index']);
Route::get('/ingredientes/{id}', [IngredienteController::class, 'show']);
Route::put('/ingredientes/{id}', [IngredienteController::class, 'update']);


Route::get('/platos/{id}', [PlatoController::class, 'show']);
Route::put('/platos/{id}', [PlatoController::class, 'update']);
