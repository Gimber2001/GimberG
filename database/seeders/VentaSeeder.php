<?php

namespace Database\Seeders;

use App\Models\Prenda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prenda::create([
            "fecha" => "23/07/2022",
            "monto" => "s/. 200.00",
            "datos_cli" => "nombre";
    };
}
