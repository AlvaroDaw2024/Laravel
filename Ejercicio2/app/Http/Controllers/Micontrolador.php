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
        if (strlen ($cadena) == 1) { 
        //este comprobante se puede saltar sin problemas con un whereAlpha 'cadena', '[a-zA-Z]'
        $arrayString = str_split($string);
        $contador = 0;
        foreach ($arrayString as $char) {
            if (strtolower($char) == $cadena) {
                $contador++;
              
        }
    }
        return response()->json([
            "La letra {$cadena} aparece "=> $contador
        ]);
    }else{
        return response()->json([
            "La cadena que has introducido es demasiado larga " => $cadena
        ]);
    }
}

    public function cuentaPalabras($string){
        $stringLimpia = trim($string);
        $arrayString = explode(" ", $stringLimpia);

        return response()->json([
            "En {$string} hay ". count($arrayString). ' palabras '=> $arrayString
        ]);

    }

    public function palindromo($string){
    /**
     * falta el control de los acentos que no tengo muy claro si deberia hacer un when con todas las opciones,
     * se hace un poco largo de mas porque si
     */
    $stringLimpia = str_replace(' ','',strtolower(trim($string)));
    $arrayString = str_split($stringLimpia);
    $reverseString = array_reverse($arrayString);
    $string1 = implode('', $reverseString);
    $string2 = implode('', $arrayString);
    $respuesta = 'no es un palindromo';
    if ($string1 === $string2) {
        $respuesta = 'si es un palindromo';
    }
    return response()->json([
        'resultado '=> $respuesta
    ]);

    }

    public function anagrama($string1,$string2){
        $respuesta = 'No son anagramas';
        $palabra1Limpia = strtolower(trim($string1));
        $palabra2Limpia = strtolower(trim($string2));

        if (strlen($palabra1Limpia) === strlen($palabra2Limpia)) {
            $arrayPalabra1 = str_split($palabra1Limpia);
            $arrayPalabra2 = str_split($palabra2Limpia);

            sort($arrayPalabra1); //si utilizamos sort al igualar una variable devuelve un boolean, si lo usamos aqui, cambia el array original y lo pone en orden
            sort($arrayPalabra2);
            if ($arrayPalabra1 === $arrayPalabra2) {
                $respuesta = 'Si son anagramas';
            }

        }
        return response()->json([
            "{$string1} y {$string2}"=> $respuesta
        ]);
    }
}
