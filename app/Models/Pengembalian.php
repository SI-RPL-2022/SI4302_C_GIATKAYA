<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = "pengembalian";

    protected $fillable = [
        'nama_lengkap',
        'email',
        'no_hp',
        'nik',
        'usaha',
        'pinjaman',
        'status_bayar',    
    ];
}
