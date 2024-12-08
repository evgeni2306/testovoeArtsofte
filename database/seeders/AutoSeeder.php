<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    private const TABLE_NAME = 'autos';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 1,
            'photo' => 'photo_1',
            'price' => 10000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 2,
            'photo' => 'photo_2',
            'price' => 20000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 3,
            'photo' => 'photo_3',
            'price' => 30000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 4,
            'photo' => 'photo_4',
            'price' => 10000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 5,
            'photo' => 'photo_5',
            'price' => 20000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 6,
            'photo' => 'photo_6',
            'price' => 30000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 7,
            'photo' => 'photo_7',
            'price' => 10000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 8,
            'photo' => 'photo_8',
            'price' => 20000,
        ]);

        DB::table(self::TABLE_NAME)->insert([
            'car_model_id' => 9,
            'photo' => 'photo_9',
            'price' => 90000,
        ]);


    }
}
