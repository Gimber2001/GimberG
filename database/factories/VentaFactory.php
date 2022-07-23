<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            Venta::create([
                "fecha" => "12/05/2022",
                "monto" => 30.5,
                "datos_cli" => "nom"
            ]);

        Venta::create([
            "fecha" => "12/08/2022",
            "monto" => 40.5,
            "datos_cli" => "nom"
        ]);

    }
}
