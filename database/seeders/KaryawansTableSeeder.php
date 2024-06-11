<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Karyawan::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'jenis_kelamin' => 'female',
            'telephone' => '987654321',
            'status' => 'active',
            'jabatan_id' => 1,
            'ktp' => '1234567890123456',
            'NPWP' => '9876543210987654',
            'total_kontak' => 5,
        ]);
    }
}
