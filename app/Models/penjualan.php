<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'kode_transaksi', 'tanggal_transaksi'];


    public function usertrxname()
    {
        return $this->belongsTo(User::class , 'id_user');
    }

    public function dls()
    {
        return $this->hasMany(detail_penjualan::class , 'id_penjualan');
    }

}
