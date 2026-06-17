<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $fillable = ['title', 'description', 'type', 'category_id', 'is_featured',];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
        ];
    }

    /**
     * 'images' -> multi-file untuk album foto
     * 'video' -> single-file untuk video embed/upload
     */
    public function registerMediaCollections(): void {
        $this->addMediaCollection('images')
        ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);

        $this->addMediaCollection('video')
        ->singleFile()
        ->acceptsMimeTypes(['video/mp4', 'video/webm', 'video/ogg']);
    }

    // Relasi
    public function category() {
        return $this->belongsTo(Category::class);
    }
}
