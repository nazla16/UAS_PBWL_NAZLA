@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA TRANSAKSI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/transaksi')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">BARANG</label>
                        <select name="transaksi_id_barang" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($barang as $brg)
                                <option value="{{$brg->barang_id}}">{{$brg->barang_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">PEGAWAI</label>
                        <select name="transaksi_id_pegawai" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($pegawai as $pgw)
                                <option value="{{$pgw->pegawai_id}}">{{$pgw->pegawai_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">PEMBELI</label>
                        <select name="transaksi_id_pembeli" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($pembeli as $pbl)
                                <option value="{{$pbl->pembeli_id}}">{{$pbl->pembeli_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL</label>
                        <input type="date" name="transaksi_tanggal" class="form-control" placeholder="Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="transaksi_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <label for="">TOTAL</label>
                        <input type="text" name="transaksi_total" class="form-control" placeholder="Total">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection