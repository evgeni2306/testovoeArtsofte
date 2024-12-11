<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Cases\Cases\CalculateCreditCase;
use App\Cases\Cases\SaveCreditRequestCase;
use App\Exceptions\FailedSaveCreditRequestException;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditCalculateRequest;
use App\Http\Requests\CreditRequestRequest;
use Illuminate\Http\JsonResponse;
use Throwable;

class CreditController extends Controller
{
    /**
     * @param CreditCalculateRequest $request
     * @param CalculateCreditCase $case
     * @return JsonResponse
     */
    public function calculate(CreditCalculateRequest $request, CalculateCreditCase $case): JsonResponse
    {
        $inputData = $request->validated();
        $creditProgram = $case->handle(
            (int)$inputData['price'],
            (int)$inputData['initialPayment'],
            (int)$inputData['loanTerm']
        );

        return response()->json([$creditProgram], 200, ['Content-Type' => 'string']);
    }

    /**
     * @param CreditRequestRequest $request
     * @param SaveCreditRequestCase $case
     * @return JsonResponse
     * @throws FailedSaveCreditRequestException
     * @throws Throwable
     */
    public function save(CreditRequestRequest $request, SaveCreditRequestCase $case): JsonResponse
    {
        $inputData = $request->validated();
        $case->handle(
            (int)$inputData['carId'],
            (int)$inputData['programId'],
            (int)$inputData['initialPayment'],
            (int)$inputData['loanTerm']
        );

        return response()->json(['success' => true], 200, ['Content-Type' => 'string']);
    }
}
