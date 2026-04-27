<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoriesIndex() {

    $categories = \App\Models\Category::withCount('posts')->get();

    // Blade ugradyar  categories/index.blade.php
    return view('categories.index', compact(['categories']));
    }
}
