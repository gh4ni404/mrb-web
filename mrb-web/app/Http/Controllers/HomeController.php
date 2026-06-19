<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Post::published()->ofType('berita')->latest('created_at')->take(3)->get();

        $latestKhutbah = Post::published()->ofType('khutbah')->latest('created_at')->take(5)->get();

        $featuredGalleries = Gallery::where('is_featured', true)->latest()->take(5)->get();

        $galleries = Gallery::latest()->take(5)->get();

        return view('home.index', compact(
            'latestNews',
            'latestKhutbah',
            'featuredGalleries',
            'galleries',
        ));
    }
}
