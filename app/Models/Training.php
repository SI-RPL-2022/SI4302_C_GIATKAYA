<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $table = "training";

    protected $fillable = [
        'cover',
        'name_training',
        'metode_training',
        'jenis_training',
        'durasi',
        'kualitas',
        'detail_pelatihan',
        'trainer'
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }
}
