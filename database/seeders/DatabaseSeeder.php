<?php

namespace Database\Seeders;

use App\Models\Autor;
use App\Models\Coleccion;
use App\Models\Coordinador;
use App\Models\Editorial;
use App\Models\Lugar;
use App\Models\Ubicacion;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(1)->create();
        Autor::factory(1)->create();
        Editorial::factory(1)->create();
        Lugar::factory(1)->create();
        Coordinador::factory(1)->create();
        Ubicacion::factory(1)->create();
        Coleccion::factory(1)->create();
    }
}
