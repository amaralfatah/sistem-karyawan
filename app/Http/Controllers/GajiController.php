<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gaji $gaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gaji $gaji)
    {
        //
    }

    public function gajian($id)
    {
        $karyawan = Karyawan::find($id);
        $jabatan = $karyawan->jabatan;

        $total_gaji = $jabatan->gaji_pokok * $karyawan->total_kontak;
        $gaji_perbulan = $total_gaji / 12;
        $total_alpha = 0;

        return view('gaji.gajian', compact('karyawan', 'total_gaji', 'gaji_perbulan', 'total_alpha'));
    }
}
