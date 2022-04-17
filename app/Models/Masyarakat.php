<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'nomor',
        'alamat',
        'password',
        'tahun',
        'tanggal',
        'nik',
        'usaha',
        'bidang',
        'toko'
    ];
}
