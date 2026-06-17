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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();

            // Tipe media dalam galeri ini (apakah album foto atau video)
            $table->enum('type', ['image', 'video'])->default('image');

            // Relasi ke categories (type = 'gallery'), misal: Arsitektur, Kegiatan, Ramadan
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            $table->boolean('is_featured')->default(false);
            $table->timestamps();

            // File/foto dikelola sepenuhnya oleh Spatie Media Library.
            // Tambahkan trait HasMedia + InteractsWithMedia pada model Gallery.
            // Daftarkan dua collection:
            //   $this->addMediaCollection('images');        → untuk album foto (multi-file)
            //   $this->addMediaCollection('video')->singleFile(); → untuk video tunggal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};
