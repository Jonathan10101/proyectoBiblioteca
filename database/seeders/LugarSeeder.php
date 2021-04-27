<?php

namespace Database\Seeders;

use Database\Factories\LugarFactory;
use Illuminate\Database\Seeder;

class LugarSeeder extends Seeder
{

    public function run()
    {
        $this->call(LugarFactory::class);    
    }

}
