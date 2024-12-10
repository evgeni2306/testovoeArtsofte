<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Cases\GetCarCase;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\JsonResponse;

class CarsController extends Controller
{
    public function list(): JsonResponse
    {
        $carsList = Car::with(['brand'])->get();

        return response()->json([$carsList], 200, ['Content-Type' => 'string']);
    }

    public function get(int $carId, GetCarCase $case): JsonResponse
    {
        $car = $case->handle($carId);

        return response()->json([$car], 200, ['Content-Type' => 'string']);
    }
}

