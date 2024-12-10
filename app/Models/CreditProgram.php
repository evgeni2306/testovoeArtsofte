<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditProgram extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'min_loan_amount'
    ];
}