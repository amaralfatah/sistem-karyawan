<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Cuti;
use App\Models\Gaji;
use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index(){
        $dataKaryawan = Karyawan::count('id');
        $dataCuti = Cuti::count('id');
        $dataCutis = Cuti::paginate(6);
        $absensi = Absensi::all();
        $absensis = Absensi::paginate(6);
        $dataAbsensi = $absensi->groupBy('tanggal_absensi')->map(function ($row) {
            return $row->count();
        });
        // Mendapatkan tanggal hari ini
        $today = Carbon::today();

        // Mendapatkan tanggal satu bulan yang lalu
        $oneMonthAgo = Carbon::today()->subMonth();

        // Menghitung total kehadiran (status 'hadir') pada hari ini menggunakan Eloquent
        $totalKehadiranHariIni = Absensi::where('tanggal_absensi', $today)
            ->where('status_absen', 'hadir')
            ->count();

        // Menghitung total kehadiran (status 'alpha') pada hari ini menggunakan Eloquent
        $totalAlphaHariIni = Absensi::where('tanggal_absensi', $today)
            ->where('status_absen', 'alpha')
            ->count();

        // Menghitung total kehadiran (status 'hadir') dalam satu bulan terakhir menggunakan Eloquent
        $totalKehadiranBulanIni = Absensi::where('status_absen', 'hadir')
            ->whereBetween('tanggal_absensi', [$oneMonthAgo, Carbon::today()])
            ->count();
            
        // Menghitung total kehadiran (status 'alpha') dalam satu bulan terakhir menggunakan Eloquent
        $totalAlphaBulanIni = Absensi::where('status_absen', 'alpha')
            ->whereBetween('tanggal_absensi', [$oneMonthAgo, Carbon::today()])
            ->count();     

        $gaji = Gaji::all();
        return view('index',compact('absensis','dataCuti','dataCutis','dataAbsensi','gaji','dataKaryawan','totalKehadiranHariIni','totalKehadiranBulanIni','totalAlphaHariIni','totalAlphaBulanIni'));
    }
}
