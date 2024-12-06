<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Auto extends Model
{
    use HasFactory;


    public function brand(): HasOne
    {
        return $this->hasOne(Brand::class);
    }

    public function carModel(): HasOne
    {
        return $this->hasOne(CarModel::class);
    }
}
