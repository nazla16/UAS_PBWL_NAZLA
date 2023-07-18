<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Barang::all();
        return view('barang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create(
            [
                'barang_nama' => $request->barang_nama,
                'barang_harga' => $request->barang_harga,
                'barang_stock' => $request->barang_stock
            ]
        );

        return redirect('barang')->with('success','Data berhasil ditambahkan');
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
        $row = Barang::findOrFail($id);
        return view('barang.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Barang::findOrFail($id);
        $row->update(
            [
                'barang_nama' => $request->barang_nama,
                'barang_harga' => $request->barang_harga,
                'barang_stock' => $request->barang_stock
            ]
        );
        return redirect('barang')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Barang::findOrFail($id);
        $row->delete();

        return redirect('barang')->with('success', 'Data berhasil dihapus');
    }
}