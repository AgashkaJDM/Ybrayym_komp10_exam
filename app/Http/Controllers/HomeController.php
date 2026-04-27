<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class HomeController extends Controller
{
    public function home()
    {
        
        $latestPosts = Post::with(['category', 'author'])
            ->latest()
            ->take(6)
            ->get();

        $trendingPosts = Post::with(['category', 'author'])
            ->orderByDesc('like_count')
            ->take(4)
            ->get();

        $categories = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(8)
            ->get();

        return view('home.index', compact([
            
            'trendingPosts',
            'categories',
        ]));
    }
}
