<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function calcularCambio($cantidad){
        $centimos = intval(floatval($cantidad) * 100);
        $monedas = [
            200 => '2€',
            100 => '1€',
            50 => '50cts',
            20 => '20cts',
            10 => '10cts',
            5 => '5cts',
            2 => '2cts',
            1 => '1ct'
        ];
         $resultado = [];
        $total_restante = $centimos;
        
        foreach ($monedas as $valor => $nombre) {
            if ($total_restante >= $valor) {
                $cantidad_monedas = intdiv($total_restante, $valor);
                $resultado[$nombre] = $cantidad_monedas;
                $total_restante %= $valor;
            }
        }
        
        return response()->json([
            'desglose' => $resultado,
        ]);
    }
    
     public function calcularEdad($edad){}

     public function calculoDigitos($digito1,$digito2){}
}


