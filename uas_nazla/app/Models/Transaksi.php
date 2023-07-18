<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_id_barang',
        'transaksi_id_pegawai',
        'transaksi_id_pembeli',
        'transaksi_tanggal',
        'transaksi_total',
        'transaksi_harga'
    ];
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'transaksi_id_barang');    
    }
    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class, 'transaksi_id_pegawai');    
    }
    public function pembeli(): BelongsTo
    {
        return $this->belongsTo(Pembeli::class, 'transaksi_id_pembeli');    
    }
}
