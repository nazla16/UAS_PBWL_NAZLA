<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $primaryKey = 'barang_id';
    protected $guarded = '[]';
    protected $fillable = [
        'barang_id',
        'barang_nama',
        'barang_harga',
        'barang_stock'
    ];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_id_barang', 'barang_id');    
    }
}
