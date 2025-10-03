<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/listar', [MiControlador::class, 'listar']);
Route::get('/listar/{dni}', [MiControlador::class,'listarPersona']);
Route::get('/insertar', [MiControlador::class,'insertar']);
Route::get('/updatear', [MiControlador::class,'updatear'] );
Route::get('/deletear/{dni}', [MiControlador::class,'deletear']);
