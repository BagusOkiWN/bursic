<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';

    protected $fillable = [
        'nama', 'tahun', 'bbm', 'km', 'transmisi', 'cc', 'lokasi', 'penjual', 'telepon', 'gambar',
    ];

}
