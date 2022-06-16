<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanBill extends Model
{
    use HasFactory;
    protected $table = "loan_bills";

    protected $fillable = [
        'user_id',
        'loan_id',
        'invoice',
        'invoice_date',
        'due_date',
        'total',
        'full_name',
        'phone',
        'email',
        'payment_method',
        'ammount',
        'payment_proof',
        'status'
    ];
}
