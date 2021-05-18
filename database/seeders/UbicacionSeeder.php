<?php

namespace Database\Seeders;

use Database\Factories\UbicacionFactory;
use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UbicacionFactory::class);
    }
}
