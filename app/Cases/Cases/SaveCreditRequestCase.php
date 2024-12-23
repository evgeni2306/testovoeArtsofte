<?php

declare(strict_types=1);

namespace App\Cases\Cases;

use App\Exceptions\FailedSaveCreditRequestException;
use App\Models\CreditRequest;
use Exception;
use Illuminate\Support\Facades\Log;
use Throwable;

class SaveCreditRequestCase
{
    private const LOG_CHANNEL_NAME = 'savecreditrequest';

    /**
     * @param int $carId
     * @param int $programId
     * @param int $initialPayment
     * @param int $loanTerm
     * @return void
     * @throws FailedSaveCreditRequestException
     * @throws Throwable
     */
    public function handle(int $carId, int $programId, int $initialPayment, int $loanTerm): void
    {
        try {
            $creditRequest = new CreditRequest([
                'car_id' => $carId,
                'program_id' => $programId,
                'initial_payment' => $initialPayment,
                'loan_term' => $loanTerm
            ]);
            $creditRequest->saveOrFail();
        } catch (Exception $exception) {
            Log::channel(self::LOG_CHANNEL_NAME)->info($exception->getMessage());
            throw new FailedSaveCreditRequestException('Credit request not created', 0, $exception);
        }
    }
}
