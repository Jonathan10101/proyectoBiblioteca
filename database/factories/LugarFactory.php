<?php

namespace Database\Factories;

use App\Models\Lugar;
use Illuminate\Database\Eloquent\Factories\Factory;

class LugarFactory extends Factory
{

    public function definition()
    {
        return [
            "ciudad" => "SIN LUGAR",
            "estado" => "",
            "pais" => ""
        ];
    }
}
