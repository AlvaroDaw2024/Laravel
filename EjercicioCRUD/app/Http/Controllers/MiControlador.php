<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function listar(){
        DB::table("personas")
    }

    public function listarPersona($dni){

    }

    public function insertar(){
        //en body de json
    }

    public function updatear(){
        //en body de json

    }

    public function deletear($dniPersona){

    }
}
