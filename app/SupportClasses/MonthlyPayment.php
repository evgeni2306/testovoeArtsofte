<?php

declare(strict_types=1);

namespace App\SupportClasses;

/**
 *
 */
final class MonthlyPayment
{
    private const MONTHS_PER_YEAR = 12;
    private const HUNDRED_PERCENTS = 100;

    /**
     * @param int $monthsAmount
     * @param float $interestRate
     * @param $loanAmount
     * @return int
     */
    public static function get(int $monthsAmount, float $interestRate, $loanAmount): int
    {
        $countOfYears = $monthsAmount / self::MONTHS_PER_YEAR;
        $percentPerYear = $interestRate / self::HUNDRED_PERCENTS * $loanAmount;
        $loanAmountWithPercent = $loanAmount + $percentPerYear * $countOfYears;
        $monthlyPayment = $loanAmountWithPercent / $monthsAmount;

        return (int)$monthlyPayment;
    }
}
