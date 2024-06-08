<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $jabatans = [
            [
                'nama_jabatan' => 'Direktur',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengkoordinir Perusahaan',
                'gaji_pokok' => 3000000,
                'tunjangan' => 500000,
                'potongan' => 200000,
            ],
            [
                'nama_jabatan' => 'Manajer',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengawasi dan mengelola departemen',
                'gaji_pokok' => 2500000,
                'tunjangan' => 400000,
                'potongan' => 150000,
            ],
            [
                'nama_jabatan' => 'Supervisor',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengawasi tim kerja',
                'gaji_pokok' => 2000000,
                'tunjangan' => 300000,
                'potongan' => 100000,
            ],
            [
                'nama_jabatan' => 'Staf Admin',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola administrasi',
                'gaji_pokok' => 1500000,
                'tunjangan' => 250000,
                'potongan' => 75000,
            ],
            [
                'nama_jabatan' => 'Staf IT',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola sistem IT',
                'gaji_pokok' => 1800000,
                'tunjangan' => 300000,
                'potongan' => 90000,
            ],
            [
                'nama_jabatan' => 'Staf Keuangan',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola keuangan perusahaan',
                'gaji_pokok' => 1700000,
                'tunjangan' => 250000,
                'potongan' => 85000,
            ],
            [
                'nama_jabatan' => 'Staf HRD',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola sumber daya manusia',
                'gaji_pokok' => 1600000,
                'tunjangan' => 240000,
                'potongan' => 80000,
            ],
            [
                'nama_jabatan' => 'Staf Marketing',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola pemasaran',
                'gaji_pokok' => 1500000,
                'tunjangan' => 230000,
                'potongan' => 75000,
            ],
            [
                'nama_jabatan' => 'Staf Produksi',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Mengelola produksi barang',
                'gaji_pokok' => 1400000,
                'tunjangan' => 220000,
                'potongan' => 70000,
            ],
            [
                'nama_jabatan' => 'Office Boy',
                'jam_kerja' => 8,
                'note_pekerjaan' => 'Membersihkan kantor',
                'gaji_pokok' => 1200000,
                'tunjangan' => 200000,
                'potongan' => 60000,
            ],
        ];

        foreach ($jabatans as $jabatan) {
            Jabatan::create($jabatan);
        }
        
    }
}
