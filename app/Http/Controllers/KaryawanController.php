<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawans.index', compact('karyawans'));
    }

    public function create()
    {
        return view('karyawans.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
            'jenis_kelamin' => 'required|string',
            'telephone' => 'required|string',
            'status' => 'required|string',
            'jabatan_id' => 'required|exists:jabatans,id',
            'ktp' => 'required|string',
            'NPWP' => 'required|string',
            'total_kontak' => 'required|integer',
        ]);

        Karyawan::create($validatedData);
        return redirect()->route('karyawans.index')->with('success', 'Data Karyawan berhasil dibuat.');
    }

    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.show', compact('karyawan'));
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawans.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,' . $id,
            'jenis_kelamin' => 'required|string',
            'telephone' => 'required|string',
            'status' => 'required|string',
            'jabatan_id' => 'required|exists:jabatans,id',
            'ktp' => 'required|string',
            'NPWP' => 'required|string',
            'total_kontak' => 'required|integer',
        ]);

        $karyawan->update($validatedData);
        return redirect()->route('karyawans.index')->with('success', 'Data Karyawan berhasil diubah.');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawans.index')->with('success', 'Data Karyawan berhasil dihapus.');
    }
}
