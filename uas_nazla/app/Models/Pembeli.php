<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pembeli extends Model
{
    use HasFactory;
    protected $table = 'tb_pembeli';
    protected $primaryKey = 'pembeli_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pembeli_id',
        'pembeli_nama',
        'pembeli_alamat',
        'pembeli_hp'
    ];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_id_pembeli', 'pembeli_id');    
    }
}
