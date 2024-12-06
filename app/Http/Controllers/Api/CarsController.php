<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetCarRequest;
use Illuminate\Http\JsonResponse;

class CarsController extends Controller
{
    public function list(): JsonResponse
    {
        dd('prjvet');
    }

    public function get(GetCarRequest $request): JsonResponse
    {

    }
}
