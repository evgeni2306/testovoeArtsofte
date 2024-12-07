<?php

declare(strict_types=1);

namespace App\Cases;

use App\Models\Auto;

class GetCarCase
{
    public function handle(int $carId): array
    {
        $car = Auto::with(['brand', 'model'])->findOrFail($carId);

        return $car->toArray();
    }
}
