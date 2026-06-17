<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = [
        'title', 'slug', 'content', 'excerpt', 
        'type', 'category_id', 'author_id', 
        'is_published', 'published_at',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    /** Daftarkan Spatie Media Collections.
     * 'thumbnail' -> single-file, otomatis generate konversi untuk ukuran kecil.
     */
    public function registerMediaCollections(): void {
        $this->addMediaCollection('thumbnail')
        ->singleFile()
        ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10)
            ->nonQueued();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Scope helpers untuk filament
    public function scopePublished($query) {
        return $query->where('is_published', true)
        ->whereNotNull('published_at')
        ->where('published_at', '<=', now());
    }

    public function scopeOfType($query, $type) {
        return $query->where('type', $type);
    }
}
