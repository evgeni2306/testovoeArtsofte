<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    private const TABLE_NAME = 'credit_requests';
    private const FIRST_FOREIGN_TABLE_NAME = 'cars';
    private const SECOND_FOREIGN_TABLE_NAME = 'credit_programs';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained(self::FIRST_FOREIGN_TABLE_NAME);
            $table->foreignId('program_id')->constrained(self::SECOND_FOREIGN_TABLE_NAME);
            $table->bigInteger('initial_payment')->unsigned();
            $table->integer('loan_term')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(self::TABLE_NAME);
    }
};
