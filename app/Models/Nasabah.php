<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'nohp',
        'pinjaman',
        'cicilan',
        'bunga_dibayar',
        'total_hutang_dibayar',
        'angsuran_per_bulan',
    ];
}