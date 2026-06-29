<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriasController;
use App\Http\Controllers\Api\ProductosController;

Route::apiResource('categorias', CategoriasController::class);
Route::apiResource('productos', ProductosController::class);