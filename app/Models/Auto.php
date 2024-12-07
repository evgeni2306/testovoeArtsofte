<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Auto extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'car_model_id'
    ];


    public function brand(): HasOneThrough
    {
        return $this->through($this->model())->has('brand');
    }

    public function model(): HasOne
    {
        return $this->hasOne(CarModel::class, 'id', 'car_model_id');
    }
}

