<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoKerja extends Model
{
    use HasFactory;
    protected $table = "infokerja";

    protected $fillable = [
        'name_perusahaan',
        'deskripsi',
        'lokasi',
        'jabatan',
        'gaji'    
    ];
}