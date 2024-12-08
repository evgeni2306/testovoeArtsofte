<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    private const TABLE_NAME = 'car_models';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Premio',
            'brand_id' => 1
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Camry',
            'brand_id' => 1
        ]);;

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Corolla',
            'brand_id' => 1
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'RX350',
            'brand_id' => 2
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'RX300',
            'brand_id' => 2
        ]);;

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'LX570',
            'brand_id' => 2
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Granta',
            'brand_id' => 3
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Priora',
            'brand_id' => 3
        ]);;

        DB::table(self::TABLE_NAME)->insert([
            'name' => 'Vesta',
            'brand_id' => 3
        ]);
    }
}
