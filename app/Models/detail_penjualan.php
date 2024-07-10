<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_penjualan', 'id_barang', 'jumlah', 'qty' , 'harga', 'total_harga', 'nominal_bayar' , 'kembalian'];


    public function penjualan()
    {
        return $this->hasMany(penjualan::class , 'id_penjualan');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class , 'id_barang');
    }
}
