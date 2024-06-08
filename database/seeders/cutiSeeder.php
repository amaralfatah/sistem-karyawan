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
                // 'karyawan_id' => 1,
                'tanggal_mulai' => '2024-06-10',
                'tanggal_berakhir' => '2024-06-15',
                'keterangan' => 'Cuti tahunan',
                'jenis_cuti' => 'Tahunan',
            ],
            [
                // 'karyawan_id' => 2,
                'tanggal_mulai' => '2024-07-01',
                'tanggal_berakhir' => '2024-07-05',
                'keterangan' => 'Cuti sakit',
                'jenis_cuti' => 'Sakit',
            ],
            [
                // 'karyawan_id' => 3,
                'tanggal_mulai' => '2024-08-15',
                'tanggal_berakhir' => '2024-08-20',
                'keterangan' => 'Cuti melahirkan',
                'jenis_cuti' => 'Melahirkan',
            ],
            [
                // 'karyawan_id' => 4,
                'tanggal_mulai' => '2024-09-10',
                'tanggal_berakhir' => '2024-09-12',
                'keterangan' => 'Cuti pribadi',
                'jenis_cuti' => 'Pribadi',
            ],
            [
                // 'karyawan_id' => 5,
                'tanggal_mulai' => '2024-10-20',
                'tanggal_berakhir' => '2024-10-25',
                'keterangan' => 'Cuti liburan',
                'jenis_cuti' => 'Liburan',
            ],  
        ];

        foreach( $cutis as $cuti){
            Cuti::create($cuti);
        }
    }
}
