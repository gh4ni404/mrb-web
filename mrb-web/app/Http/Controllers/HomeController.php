<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\History;
use App\Models\HistoryFeature;
use App\Models\HistoryGallery;
use App\Models\HistoryTimeline;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latestNews = Post::with('categories')->published()->ofType('berita')->latest('published_at')->take(4)->get();

        $latestArticle = Post::with('categories')->published()->ofType('artikel')->latest('published_at')->take(3)->get();
        
        $latestKhutbah = Post::published()->ofType('khutbah')->latest('created_at')->take(5)->get();

        $featuredGalleries = Gallery::where('is_featured', true)->latest()->take(5)->get();

        $galleries = Gallery::latest()->take(5)->get();

        return view('home.index', compact(
            'latestNews',
            'latestArticle',
            'latestKhutbah',
            'featuredGalleries',
            'galleries',
        ));
    }

    public function sejarah()
    {
        $history = History::getInstance();
        $timelines = HistoryTimeline::active()->get();
        $featuresEstetika = HistoryFeature::active()->byCategory('estetika')->get();
        $featuresModern = HistoryFeature::active()->byCategory('modern')->get();
        $galleries = HistoryGallery::active()->with('category')->get();
        $galleryCategories = HistoryGallery::categoryOptions();

        return view('home.sejarah', compact('history', 'timelines', 'featuresEstetika', 'featuresModern', 'galleries', 'galleryCategories'));
    }
}
