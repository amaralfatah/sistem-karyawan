<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Cuti;
use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cuti::simplePaginate(6);
        $current = $data->currentPage();
        return view('cuti/read', compact('data','current'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $karyawan = Karyawan::all();
            return view('cuti/create',compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $currentTime = Carbon::now('Asia/Jakarta');
        $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'keterangan' => 'required|string|max:255',
            'jenis_cuti' => 'required|string|max:255',
        ]);

        $tanggalMulai = Carbon::parse($request->tanggal_mulai);
        $tanggalBerakhir = Carbon::parse($request->tanggal_berakhir);

        // Loop through each date between tanggal_mulai and tanggal_berakhir
        for ($date = $tanggalMulai; $date->lte($tanggalBerakhir); $date->addDay()) {
            $absensi = [
                'karyawan_id' => $request->karyawan_id,
                'status_absen' => 'cuti',
                'keterangan' => $request->keterangan,
                'tanggal_absensi' => $date->toDateString(),
                'time' => $currentTime->toTimeString(),
            ];
            Absensi::create($absensi);
        }

        Cuti::create($request->all());
        return redirect()->route('cuti.read')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = Cuti::find($id);
        $karyawan = Karyawan::all();
        return view('cuti/edit',compact('data','karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Cuti::find($id);
        $data->update($request->all());
        return redirect()->route('cuti.read')->with('success', 'Cuti berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        Cuti::destroy($id);
        return redirect()->route('cuti.read')->with('success', 'Cuti berhasil dihapus');
    }
}
