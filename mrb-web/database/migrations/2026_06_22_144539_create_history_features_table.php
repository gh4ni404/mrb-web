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
        Schema::create('history_features', function (Blueprint $table) {
            $table->id();
            $table->enum('category', ['estetika', 'modern']);
            $table->string('title');
            $table->string('tagline', 100)->nullable();
            $table->text('description');
            // Pakai TEXT agar kompatibel dengan URL panjang (cloud storage)
            $table->text('image_url')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_features');
    }
};
