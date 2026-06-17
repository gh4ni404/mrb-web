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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->text('excerpt')->nullable();

            // Jenis Konten: Berita Umum, Artikel keislaman, atau arsip khutbah
            $table->enum('type', ['berita', 'artikel', 'khutbah'])->default('berita');

            // Relasi ke table categories (nullable agar fleksible)
            $table->foreignId('category_id')
            ->nullable()
            ->constrained('categories')
            ->nullOnDelete();

            // Penulis/admin yang membuat postingan
            $table->foreignId('author_id')
            ->constrained('users')
            ->cascadeOnDelete();

            // Thumbnail dikelola oleh Spatie Media Library (tidak perlu kolom path)
            // Tambahkan trait HasMedia + InteractsWithMedia pada model Post untuk mengelola media
            // Daftarkan collection: $this->addMediaCollection('thumbnails')->singleFile();

            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            // Indeks untuk query filtering yang umum dipakai
            $table->index(['type', 'is_published']);
            $table->index('published_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
