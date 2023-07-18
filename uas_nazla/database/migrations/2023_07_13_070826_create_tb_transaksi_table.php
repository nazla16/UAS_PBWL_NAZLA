<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('transaksi_id');
            $table->foreignId('transaksi_id_barang');
            $table->foreignId('transaksi_id_pegawai');
            $table->foreignId('transaksi_id_pembeli');
            $table->string('transaksi_tanggal');
            $table->string('transaksi_total');
            $table->string('transaksi_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi');
    }
};
