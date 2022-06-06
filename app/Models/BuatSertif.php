<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuatSertif extends Model
{
    use HasFactory;
    protected $table = "buatsertif";

    protected $fillable = [
        'nama_sertifikat',
        'judul_pelatihan',
        'nama_penyelenggara',
        'foto'
    ];
}