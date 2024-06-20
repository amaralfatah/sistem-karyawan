<?php

namespace Database\Seeders;

use App\Models\Gaji;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GajisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gaji::create([
            'karyawan_id' => 1,
            'total' => 4500000,
            'potongan' => 500000,
            'tunjangan' => 1000000,
        ]);
    }
}
