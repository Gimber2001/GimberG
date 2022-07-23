<?php

use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get("/venta", [VentaController::class, "venta_form"]);
Route::post("/venta", [VentaController::class, "detalle_venta"]);
Route::get("/venta", [VentaController::class, "mostrar"]);
Route::get("/actualizar/{venta_id}", [VentaController::class, "actualizar_form"]);
Route::post("/actualizar/", [VentaController::class, "actualizar"]);

Route::get("prenda/eliminar/{prenda_id}", [PrendaController::class, "eliminar"]);

Route::get("/detalleventa", [DetalleVentaController::class, "mostrar"]);
