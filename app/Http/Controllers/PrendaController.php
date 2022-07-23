<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use App\Models\Venta;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    public function eliminar($prenda_id){
        $venta = Venta::where("prenda_id",$prenda_id)->first();

        if($venta==null){
            $prenda = Prenda::find($prenda_id);
            $prenda->delete();
            return "Prenda eliminada";
        }else{
            return "no se puede eliminar la Prenda Elegida";
        }
    }
}
