<?php

use App\Http\Controllers\MiControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


