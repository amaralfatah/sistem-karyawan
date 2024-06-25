<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Cuti::all();
        return view('cuti/read', compact('data'));
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
        $validatedData = $request->validate([
            'karyawan_id' => 'required|exists:karyawans,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
            'keterangan' => 'required|string|max:255',
            'jenis_cuti' => 'required|string|max:255',
        ]);

        Cuti::create($request->all());
        return redirect()->route('cuti.read')->with('success','data berhasil ditambahkan');

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
