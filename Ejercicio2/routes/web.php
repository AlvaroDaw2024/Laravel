<?php

use App\Http\Controllers\Micontrolador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


