<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Gaji::factory()->count(50)->create();
    }
}
