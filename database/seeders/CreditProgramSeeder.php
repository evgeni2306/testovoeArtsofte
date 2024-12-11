<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreditProgramSeeder extends Seeder
{
    private const TABLE_NAME = 'credit_programs';
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::TABLE_NAME)->insert([
            'title' => 'Base program',
            'min_loan_amount' => 10000,
            'interest_rate' => 11.0
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'title' => 'Middle program',
            'min_loan_amount' => 20000,
            'interest_rate' => 12.0
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'title' => 'High program',
            'min_loan_amount' => 30000,
            'interest_rate' => 14.0
        ]);
    }
}
