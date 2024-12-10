<?php

declare(strict_types=1);

namespace App\Cases;

use App\Models\Car;

class GetCarCase
{
    public function handle(int $carId): array
    {
        $car = Car::with(['brand', 'model'])->findOrFail($carId);

        return $car->toArray();
    }
}
