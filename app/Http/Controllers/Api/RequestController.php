<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Cases\SaveCreditRequestCase;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditRequestRequest;

class RequestController extends Controller
{
    public function save(CreditRequestRequest $request, SaveCreditRequestCase $case)
    {
        $inputData = $request->validated();
        $case->handle((int)$inputData['carId'], (int)$inputData['programId'], (int)$inputData['initialPayment'], (int)$inputData['loanTerm']);

        return response()->json(['success' => true], 200, ['Content-Type' => 'string']);
    }
}
