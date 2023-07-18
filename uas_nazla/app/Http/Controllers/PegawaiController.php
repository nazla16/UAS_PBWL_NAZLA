<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pegawai::all();
        return view('pegawai.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pegawai::create(
            [
                'pegawai_nama' => $request->pegawai_nama,
                'pegawai_alamat' => $request->pegawai_alamat,
                'pegawai_hp' => $request->pegawai_hp
            ]
        );

        return redirect('pegawai')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = pegawai::findOrFail($id);
        return view('pegawai.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = pegawai::findOrFail($id);
        $row->update(
            [
                'pegawai_nama' => $request->pegawai_nama,
                'pegawai_alamat' => $request->pegawai_alamat,
                'pegawai_hp' => $request->pegawai_hp
            ]
        );
        return redirect('pegawai')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = pegawai::findOrFail($id);
        $row->delete();

        return redirect('pegawai')->with('success', 'Data berhasil dihapus');
    }
}