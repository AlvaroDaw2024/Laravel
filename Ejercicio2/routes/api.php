<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Micontrolador;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/contarCadena/{string}/{cadena}', [Micontrolador::class, 'repeticionCadena']);
Route::get('/cesar/{string}', [Micontrolador::class, 'cesar'])->whereAlphaNumeric('string');
Route::get('/cuentaPalabras/{string}', [Micontrolador::class,'cuentaPalabras']);
Route::get('/palindromo/{string}', [Micontrolador::class,'palindromo']);
Route::get('/anagrama/{cadena1}/{cadena2}', [Micontrolador::class,'anagrama']);