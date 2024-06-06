<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Jabatan::all();
        return view('read', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'nama_jabatan' => 'required|string|max:255',
        'jam_kerja' => 'required|integer|min:0',
        'note_pekerjaan' => 'required|string|max:255',
        'gaji_pokok' => 'required|integer|min:0',
        'tunjangan' => 'required|integer|min:0',
        'potongan' => 'required|integer|min:0',
        ]);

        Jabatan::create($request->all());

        return redirect()->route('jabatan.read')->with('success','data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Jabatan::find($id);

        Jabatan::update($data->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan,$id)
    {
        Jabatan::destroy($id);
        return redirect()->route('jabatan.read')->with('success', 'Jabatan berhasil dihapus');
    }
}
