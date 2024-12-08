<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    private const TABLE_NAME = 'brands';
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Toyota',
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Lexus',
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Lada',
        ]);
    }
}
