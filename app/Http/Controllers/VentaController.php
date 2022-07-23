<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Prenda;
use App\Models\Venta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function ventas_form(){
        $clientes = Cliente::all();
        $prenda = Venta::join("prenda_modelo", "prends.modelo_id", "=", "prenda.modelo_id")
            ->select("prends.*","prenda_modelo.descripcion", "prenda_modelo.precio")
            ->get();
        $prendas =;
        return view("ventas_form")
            ->with("prenda", $prendas)
            ->with("clientes", $clientes);
    }
    public function ventas(Request $request)
    {
        $venta = new Venta();
        $venta->fecha = $request->input("fecha");
        $venta->monto = $request->input("monto");
        $venta->datos_Cli = $request->input("datos_Cli");
        $venta->guardar();
        return "Venta Guardada";
    }
    public function mostrar()
    {
        $venta = Venta::join("prenda", "venta.prenda_id", "=", "prenda.id")
            ->join("clientes", "ventas.cliente_id", "=", "clientes.id")
            ->select("ventas.*", "prendas.marca", "clientes.nombre")
            ->get();
        return view("venta_mostrar")
            ->with("venta", $ventas);
    }

    public function actualizar_form($venta_id){
        $venta = Venta::where("id", $venta_id->first();
        return view("venta_actualizar")
            ->with("prenda", $venta);

    }
    public function actualizar(Request $request){
        $hoy = Carbon::now()->format("Y-m-d");

        if($request->input("SinDetalles_Venta") > $hoy){
            $venta =  Venta::find($request->input("id"));
            $venta->fecha = $request->input("fecha");
            $venta->monto = $request->input("monto");
            $venta->datos_Cli = $request->input("datos_Cli");
            $venta->save();
            return "venta actualizada";
        }else{
            return "ya no se puede actualizar la venta";
        }
    }

    public function eliminar($venta_id){
        $venta =  Venta::find($venta_id);
        $venta->delete();
        return "Venta actualizada";

    }
}
}
