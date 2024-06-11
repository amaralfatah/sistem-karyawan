<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{

    public function index()
    {
        $absensi = Absensi::all();
        $karyawan = Karyawan::all();

        return view('absensi.read', compact('absensi', 'karyawan'));
    }


    public function create()
    {
        $karyawan = Karyawan::all();

        return view('absensi.create', compact('karyawan'));
    }


    public function store(Request $request)
    {
        $currentTime = Carbon::now('Asia/Jakarta');
        $deadline = Carbon::today('Asia/Jakarta')->setHour(8)->setMinute(0)->setSecond(0);

        // dd($currentTime);
        // dd($deadline);

        $validateData = $request->validate([
            'id_karyawan' => 'required|string',
            'status_absen' => 'required|string',
            'keterangan' => 'nullable',
            'tanggal_absensi' => $currentTime->toDateString(),
            'time' => $currentTime->toTimeString(),
        ]);

        // $validateData['tanggal_absensi'] = $currentTime;

        if ($currentTime->greaterThan($deadline)) {
            return 'failed';
        }

        Absensi::create($validateData);

        return redirect()->route('absensi.index')->with('success', 'Data Absensi Berhasil dibuat');
    }


    public function show(Absensi $absensi, $id)
    {
        $absensi = $absensi::findOrFail($id);

        return view('absensi.show', compact('absensi'));
    }


    public function edit(Absensi $absensi, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $karyawan = Karyawan::all();

        return view('edit.absensi', compact('absensi', 'karyawan'));
    }


    public function update(Request $request, Absensi $absensi, $id)
    {
        $absensi = $absensi::findOrFail($id);

        $validateData = $request->validate([
            'id_karyawan' => 'required|string',
            'status_absen' => 'required|string',
            'keterangan' => 'nullable',
            'tanggal_absensi' => 'required|date',
        ]);

        $absensi->update($validateData);

        return redirect()->route('absensi.index')->with('Data Absensi berhasil diubah');
    }


    public function destroy(Absensi $absensi, $id)
    {
        $absensi = $absensi::findOrFail($id);

        $absensi->delete();

        return redirect()->route('absensi.index')->with('Data Absensi berhasil dihapus');
    }


    public function hideAttendance()
    {
        $currentTime = Carbon::now();

        $deadline = Carbon::today('Asia/Jakarta')->hour('8')->minute('0')->second('0');

        
    }
}
