<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $gajis = Gaji::with(['karyawan.jabatan', 'karyawan.absensis'])->get();

        $gajis = $gajis->map(function ($gaji) {
            $gaji->total_potongan = $this->calculateTotalPotongan($gaji);
            $gaji->total_tunjangan = $this->calculateTotalTunjangan($gaji);
            $gaji->total_gaji = $this->calculateTotalGaji($gaji);
            return $gaji;
        });

        return view('gaji.index', compact('gajis'));
    }

    private function calculateTotalPotongan($gaji) {
        return $gaji->karyawan->total_kontak * $gaji->karyawan->jabatan->potongan;
    }

    private function calculateTotalTunjangan($gaji) {
        return $gaji->karyawan->total_kontak * $gaji->karyawan->jabatan->tunjangan;
    }

    private function calculateTotalGaji($gaji) {
        $gajiPokok = $gaji->karyawan->jabatan->gaji_pokok;
        $tunjangan = $gaji->karyawan->jabatan->tunjangan;
        $totalKontak = $gaji->karyawan->total_kontak;
        $totalPotongan = $this->calculateTotalPotongan($gaji);

        return (($gajiPokok + $tunjangan) * $totalKontak) - $totalPotongan;
    }
}
