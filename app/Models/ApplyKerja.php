<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyKerja extends Model
{
    use HasFactory;
    protected $table = "apply_kerja";

    protected $fillable = [
        'id_user',
        'id_lapangan_kerja',
        'berkas_lamaran' 
    ];
}
