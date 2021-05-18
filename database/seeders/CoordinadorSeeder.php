<?php

namespace Database\Seeders;

use Database\Factories\CoordinadorFactory;
use Illuminate\Database\Seeder;

class CoordinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CoordinadorFactory::class);
    }
}
