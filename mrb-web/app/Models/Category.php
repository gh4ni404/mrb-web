<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'type', 'description'];

    /** Semua post yang menggunakan kategori ini */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /** Semua galeri yang menggunakan kategori ini */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
