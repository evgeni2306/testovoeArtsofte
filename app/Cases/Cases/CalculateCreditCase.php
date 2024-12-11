<?php

declare(strict_types=1);

namespace App\Cases\Cases;

use App\Models\CreditProgram;
use App\SupportClasses\MonthlyPayment;

class CalculateCreditCase
{
    private const MIN_LOAN_AMOUNT_FIELD = 'min_loan_amount';

    /**
     * @param int $price
     * @param int $initialPayment
     * @param int $loanTerm
     * @return array
     */
    public function handle(int $price, int $initialPayment, int $loanTerm): array
    {
        $loanAmount = $price - $initialPayment;
        $creditProgram = CreditProgram::query()
            ->orderBy(self::MIN_LOAN_AMOUNT_FIELD, 'desc')
            ->where(self::MIN_LOAN_AMOUNT_FIELD, '<=', $loanAmount)
            ->firstOrFail();

        $result = $creditProgram->toArray();
        $result['monthlyPayment'] = MonthlyPayment::get(
            $loanTerm,
            (float)$creditProgram->interest_rate,
            $loanAmount
        );

        return $result;
    }
}
