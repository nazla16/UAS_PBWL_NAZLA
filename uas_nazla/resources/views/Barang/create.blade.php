@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>TAMBAH DATA BARANG</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/barang')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="barang_nama" class="form-control" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="barang_harga" class="form-control" placeholder="Harga">
                    </div>
                    <div class="mb-3">
                        <label for="">STOCK</label>
                        <input type="text" name="barang_stock" class="form-control" placeholder="Stock">
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