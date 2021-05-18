<?php

namespace Database\Seeders;

use Database\Factories\AutorFactory;
use Illuminate\Database\Seeder;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AutorFactory::class);
    }
}
