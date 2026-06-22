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
        Schema::create('history_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('category', 100);
            $table->string('title');
            $table->text('description')->nullable();
            // image_url: gambar resolusi penuh
            $table->text('image_url');
            // thumbnail_url: versi kecil untuk performa load galeri
            $table->text('thumbnail_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_galleries');
    }
};
