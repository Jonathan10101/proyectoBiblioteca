<?php

namespace Database\Seeders;

use App\Models\Ubicacion;
use Database\Factories\ColeccionFactory;
use Illuminate\Database\Seeder;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ColeccionFactory::class);
    }
}
