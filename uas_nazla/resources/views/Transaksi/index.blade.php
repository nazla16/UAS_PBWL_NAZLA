@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>DATA TRANSAKSI</h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('transaksi/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td>NO</td>
                        <td>NAMA BARANG</td>
                        <td>NAMA PEGAWAI</td>
                        <td>NAMA PEMBELI</td>
                        <td>TANGGAL</td>
                        <td>TOTAL</td>
                        <td>HARGA</td>
                        <td>EDIT</td>
                        <td>HAPUS</td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->transaksi_id}}</td>
                        <td>{{ $row->barang->barang_nama}}</td>
                        <td>{{ $row->pegawai->pegawai_nama}}</td>
                        <td>{{ $row->pembeli->pembeli_nama}}</td>
                        <td>{{ $row->transaksi_tanggal}}</td>
                        <td>{{ $row->transaksi_harga}}</td>
                        <td>{{ $row->transaksi_total}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('transaksi/' .$row->transaksi_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('transaksi/' .$row->transaksi_id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection