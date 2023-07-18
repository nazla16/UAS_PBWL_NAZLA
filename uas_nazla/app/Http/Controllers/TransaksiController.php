<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\Pembeli;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.create',[
            'barang' => Barang::get(),
            'pegawai' => Pegawai::get(),
            'pembeli' => Pembeli::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        transaksi::create(
            [
                'transaksi_id_barang' => $request->transaksi_id_barang,
                'transaksi_id_pegawai' => $request->transaksi_id_pegawai,
                'transaksi_id_pembeli' => $request->transaksi_id_pembeli,
                'transaksi_tanggal' => $request->transaksi_tanggal,
                'transaksi_total' => $request->transaksi_total,
                'transaksi_harga' => $request->transaksi_harga
            ]
        );

        return redirect('transaksi')->with('success','Data berhasil ditambahkan');
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
        $row = transaksi::findOrFail($id);
        return view('transaksi.edit',[
            'barang' => Barang::get(),
            'pegawai' => Pegawai::get(),
            'pembeli' => Pembeli::get()
        ], compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = transaksi::findOrFail($id);
        $row->update(
            [
                'transaksi_id_barang' => $request->transaksi_id_barang,
                'transaksi_id_pegawai' => $request->transaksi_id_pegawai,
                'transaksi_id_pembeli' => $request->transaksi_id_pembeli,
                'transaksi_tanggal' => $request->transaksi_tanggal,
                'transaksi_total' => $request->transaksi_total,
                'transaksi_harga' => $request->transaksi_harga
            ]
        );
        return redirect('transaksi')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = transaksi::findOrFail($id);
        $row->delete();

        return redirect('transaksi')->with('success', 'Data berhasil dihapus');
    }
}