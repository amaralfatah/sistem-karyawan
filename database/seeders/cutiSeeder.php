<?php

namespace Database\Seeders;

use App\Models\Cuti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cutis = [
          [
                'karyawan_id' => 2,
                'tanggal_mulai' => '2024-06-10',
                'tanggal_berakhir' => '2024-06-15',
                'keterangan' => 'Cuti tahunan',
                'jenis_cuti' => 'Tahunan',
            ],
            
        ];

        foreach( $cutis as $cuti){
            Cuti::create($cuti);
        }
    }
}
