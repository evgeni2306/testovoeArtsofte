<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarModel extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'brand_id',
    ];

    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class,'id','brand_id');
    }
}

