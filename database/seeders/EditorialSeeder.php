<?php

namespace Database\Seeders;

use Database\Factories\EditorialFactory;
use Illuminate\Database\Seeder;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EditorialFactory::class);
    }
}
