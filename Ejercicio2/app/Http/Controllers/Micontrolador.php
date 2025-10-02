<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class Micontrolador extends Controller
{
    public function cesar($string){
        $arrayString = str_split($string);
        $arrayCesar = [];
        foreach ($arrayString as $char) {
            if ($char == "Z") {
                array_push($arrayCesar,"A");
            }
            else if ($char == "z") {
                array_push($arrayCesar,"a");
            }
            else{
                array_push($arrayCesar, chr(ord($char)+1));
            }
        }
            $codificado = implode("", $arrayCesar);
            return response()->json([
            'Codificado' => $codificado
        ]);
    }

    public function contarCadena($string,$cadena){

    }

    public function cuentaPalabras($string){

    }

    public function palindromo($string){

    }

    public function anagrama($string1,$string2){

    }
}
