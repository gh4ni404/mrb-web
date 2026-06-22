<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'quote_text',
        'intro_title',
        'intro_description',
        'tsunami_stat_title',
        'tsunami_stat_description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public static function getInstance(): static
    {
        return static::firstOrCreate([], [
            'hero_title' => '',
            'hero_subtitle' => '',
            'quote_text' => '',
            'intro_title' => '',
            'intro_description' => '',
            'tsunami_stat_title' => '',
            'tsunami_stat_description' => '',
            'is_active' => true,
        ]);
    }
}
