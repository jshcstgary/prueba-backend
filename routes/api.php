<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/uers', [UserController::class, 'index']);

// Route::get('/users/{id}', [UserController::class, 'show']);

// Route::post('/users', [UserController::class, 'store']);

// Route::put('/users/{id}', [UserController::class, 'update']);

// Route::patch('/users/{id}', [UserController::class, 'updatePartial']);

// Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::apiResource('users', UserController::class);
Route::apiResource('cargos', CargoController::class);
Route::apiResource('departamentos', DepartamentoController::class);
