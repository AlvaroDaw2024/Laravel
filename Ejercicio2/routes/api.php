<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Micontrolador;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/contarCadena/{string}/{cadena}', [Micontrolador::class, 'contarCadena'])->whereAlpha('cadena');
Route::get('/cesar/{string}', [Micontrolador::class, 'cesar'])->whereAlphaNumeric('string');
Route::get('/cuentaPalabras/{string}', [Micontrolador::class,'cuentaPalabras'])->where('string', '[a-zA-Z\s]+');
Route::get('/palindromo/{string}', [Micontrolador::class,'palindromo'])->where('string', '[a-zA-Z\s]+');;
Route::get('/anagrama/{cadena1}/{cadena2}', [Micontrolador::class,'anagrama']);