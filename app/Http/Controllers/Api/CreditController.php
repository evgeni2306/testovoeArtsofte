<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Cases\CalculateCreditCase;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditCalculateRequest;
use Illuminate\Http\JsonResponse;

class CreditController extends Controller
{
    public function calculate(CreditCalculateRequest $request, CalculateCreditCase $case): JsonResponse
    {
        $inputData = $request->validated();
        $creditProgram = $case->handle((int)$inputData['price'], (int)$inputData['initialPayment'], (int)$inputData['loanTerm']);

        return response()->json([$creditProgram], 200, ['Content-Type' => 'string']);
    }
}
