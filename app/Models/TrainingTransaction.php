<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTransaction extends Model
{
    use HasFactory;
    protected $table = "training_transaction";

    protected $fillable = [
        'user_id',
        'training_id' 
    ];
}
