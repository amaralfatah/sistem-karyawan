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
        session()->forget('jabatan');
        $data = Jabatan::all();
        return view('jabatan/read', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan/create');
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
    public function edit(Request $request, $id)
    {
        $data = Jabatan::find($id);
        return view('jabatan/edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Jabatan::find($id);
        $data->update($request->all());
        return redirect()->route('jabatan.read')->with('success', 'Jabatan berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        Jabatan::destroy($id);
        return redirect()->route('jabatan.read')->with('success', 'Jabatan berhasil dihapus');
    }

    public function search(Request $request){
            $data = Jabatan::where('nama_jabatan', 'like', $request->jabatan.'%')->orderBy('id', $request->urutan )->get();
            session(['jabatan' => $request->jabatan]);
            return view('jabatan.read',compact('data'));
    }

    public function sorting(Request $request){
        $data = Jabatan::orderBy('id', $request->urutan )->get();
        return view('jabatan.read',compact('data'));
    }
}
