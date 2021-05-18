<?php

namespace Database\Factories;

use App\Models\Coordinador;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoordinadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coordinador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre1" => "SIN COORDINADOR(ES)",
            "nombre2" => "",
            "apellido1" => "",
            "apellido2" => ""
        ];
    }
}
