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
        Schema::table('history_galleries', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->nullable()
                ->after('id')
                ->constrained('categories')
                ->cascadeOnDelete();
        });

        Schema::table('history_galleries', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }

    public function down(): void
    {
        Schema::table('history_galleries', function (Blueprint $table) {
            $table->string('category', 100)->nullable()->after('id');
        });

        Schema::table('history_galleries', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
        });

        Schema::table('history_galleries', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
};
