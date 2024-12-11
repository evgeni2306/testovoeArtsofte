<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Cases\CalculateCreditCase;
use App\Cases\SaveCreditRequestCase;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditCalculateRequest;
use App\Http\Requests\CreditRequestRequest;
use Illuminate\Http\JsonResponse;

class CreditController extends Controller
{
    public function calculate(CreditCalculateRequest $request, CalculateCreditCase $case): JsonResponse
    {
        $inputData = $request->validated();
        $creditProgram = $case->handle((int)$inputData['price'], (int)$inputData['initialPayment'], (int)$inputData['loanTerm']);

        return response()->json([$creditProgram], 200, ['Content-Type' => 'string']);
    }

    public function save(CreditRequestRequest $request, SaveCreditRequestCase $case): JsonResponse
    {
        $inputData = $request->validated();
        $case->handle((int)$inputData['carId'], (int)$inputData['programId'], (int)$inputData['initialPayment'], (int)$inputData['loanTerm']);

        return response()->json(['success' => true], 200, ['Content-Type' => 'string']);
    }
}
