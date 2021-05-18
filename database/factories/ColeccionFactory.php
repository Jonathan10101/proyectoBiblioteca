<?php

namespace Database\Factories;

use App\Models\Coleccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColeccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coleccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => "SIN COLECCION"
        ];
    }
}
