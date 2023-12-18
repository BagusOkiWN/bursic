<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = [
        'type',
        'nama', 
        'warna',
        'tahun',
        'kursi',
        'pintu', 
        'bbm',
        'km', 
        'transmisi', 
        'cc', 
        'power',
        'lokasi', 
        'penjual', 
        'telepon', 
        'harga', 
        'description',
        'gambar',
    ];

}
