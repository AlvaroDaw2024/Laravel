<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cambio/{cantidad}', [MiControlador::class, 'calcularCambio']);
Route::get('/edad/{nacimiento}/{fecha?}', [MiControlador::class, 'calcularEdad']);
Route::get('/digitos/{digito1}/{digito2}', [MiControlador::class, 'calculoDigitos']);