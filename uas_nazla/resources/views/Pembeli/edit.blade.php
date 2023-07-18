@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA PEMBELI</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pembeli/' .$row->pembeli_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">NAMA</label>
                        <input type="text" name="pembeli_nama" class="form-control" value="{{$row->pembeli_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">ALAMAT</label>
                        <input type="text" name="pembeli_alamat" class="form-control" value="{{$row->pembeli_alamat}}">
                    </div>
                    <div class="mb-3">
                        <label for="">NOMOR HP</label>
                        <input type="text" name="pembeli_hp" class="form-control" value="{{$row->pembeli_hp}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection