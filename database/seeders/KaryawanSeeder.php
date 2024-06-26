<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Karyawan::factory()->count(50)->create();
    }
}