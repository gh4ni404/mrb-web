<?php

namespace App\Models;

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
    ];

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
        ]);
    }
}
