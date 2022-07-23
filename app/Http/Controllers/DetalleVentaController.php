<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Models\Venta;
use Illuminate\Http\Request;


class DetalleVentaController extends Controller
{
    public function  mostrar(){
        $ventas = Venta::all();
        $prenda = Prenda::join("prenda_modelo", "prends.modelo_id", "=", "prenda.modelo_id")
            ->select("prends.*","prenda_modelo.descripcion", "prenda_modelo.precio")
            ->get();
        return view("venta_mostrar")
            ->with("venta", $ventas)
            ->with("prenda", $prendas);
    }

}
