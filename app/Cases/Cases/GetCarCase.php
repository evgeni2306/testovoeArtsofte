<?php

declare(strict_types=1);

namespace App\Cases\Cases;

use App\Models\Car;

class GetCarCase
{
    /**
     * @param int $carId
     * @return array
     */
    public function handle(int $carId): array
    {
        $car = Car::with(['brand', 'model'])->findOrFail($carId);

        return $car->toArray();
    }
}
