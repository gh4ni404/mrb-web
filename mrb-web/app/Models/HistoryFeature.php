<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class HistoryFeature extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'category',
        'title',
        'tagline',
        'icon',
        'description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(300)
            ->sharpen(5)
            ->nonQueued();
    }

    // Konstanta kategori — sinkron dengan ENUM di migration
    const CATEGORY_ESTETIKA = 'estetika';

    const CATEGORY_MODERN = 'modern';

    public static function categoryOptions(): array
    {
        return [
            self::CATEGORY_ESTETIKA => 'Jejak Sejarah (Estetika)',
            self::CATEGORY_MODERN => 'Wajah Baru (Modern)',
        ];
    }

    // Scope: hanya tampilkan yang aktif, urut by sort_order
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    public function scopeByCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }
}
