<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function index()
    {
        $absensi = Absensi::all();
        $karyawan = Karyawan::all();

        return view('absensi.index', compact('absensi', 'karyawan'));
    }


    public function create()
    {
        $karyawan = Karyawan::all();

        return view('absensi.create', compact('karyawan'));
    }


    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_karyawan' => 'required',
            'status_absen' => 'required',
            'keterangan' => 'required',
            'tanggal_absensi' => 'required',
        ]);

        Absensi::create($validateData);

        return redirect()->route('absensi.index')->with('success', 'Data Absensi Berhasil dibuat');
    }


    public function show(Absensi $absensi)
    {
        //
    }


    public function edit(Absensi $absensi)
    {
        //
    }


    public function update(Request $request, Absensi $absensi)
    {
        //
    }


    public function destroy(Absensi $absensi)
    {
        //
    }
}
