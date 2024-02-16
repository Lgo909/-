<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            /*
             * метод nullable говорит о том что колонка не является обязательной
             *
             * метод migrate:refresh сначала откатил все миграции затем накатил снова и бд пустая
             *
             * php artisan db:seed - запуск сидов
             */
            $table
                ->string('test_column')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        /*
         * метод down откатывает миграцию
         * --step=1 откатит миграцию на 1
         */
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('test_column');
        });
    }
};
