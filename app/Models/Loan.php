<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $table = "loans";

    protected $fillable = [
        'amount',
        'duration',
        'instalment',
        'file_nik',
        'file_profesi',
        'file_pembiayaan',
        'file_foto_usaha',
        'file_skt',
        'file_sku',
        'user_id',
        'status'
    ];
}
