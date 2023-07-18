<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'tb_pegawai';
    protected $primaryKey = 'pegawai_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pegawai_id',
        'pegawai_nama',
        'pegawai_alamat',
        'pegawai_hp'
    ];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_id_pegawai', 'pegawai_id');    
    }
}
