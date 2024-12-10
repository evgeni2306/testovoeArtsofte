<?php

declare(strict_types=1);

namespace App\Cases;

use App\Models\CreditProgram;

class CalculateCreditCase
{
    private const MONTHS_PER_YEAR = 12;
    private const MIN_LOAN_AMOUNT_FIELD = 'min_loan_amount';

    public function handle(int $price, int $initialPayment, int $loanTerm): array
    {
        $loanAmount = $price - $initialPayment;
        $countOfYears = $loanTerm / self::MONTHS_PER_YEAR;
        $creditProgram = CreditProgram::query()
            ->orderBy(self::MIN_LOAN_AMOUNT_FIELD, 'desc')
            ->where(self::MIN_LOAN_AMOUNT_FIELD, '<', $loanAmount)
            ->firstOrFail();

        $percentPerYear = $creditProgram->interest_rate / 100 * $loanAmount;
        $loanAmountWithPercent = $loanAmount + $percentPerYear * $countOfYears;
        $monthlyPayment = (int)$loanAmountWithPercent / $loanTerm;

        $result = $creditProgram->toArray();

        $result['monthlyPayment'] = $monthlyPayment;

        return $result;
    }
}
