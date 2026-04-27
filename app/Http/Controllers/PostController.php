<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\JsonSchema\Types\Type;

class PostController extends Controller
{
    public function postsIndex(Request $request)
    {
        $request->validate([
            'categoryId' => ['nullable', 'integer', 'exists:categories,id']
        ]);

        $f_category_id = $request->categoryId ?? null;
       

        // request-den categoryId geldi
        $posts = \App\Models\Post::when(
            $f_category_id,
            function ($query) use ($f_category_id) {
                return $query->where('category_id', $f_category_id);
            }
        )
            ->paginate(15)
            ->withQueryString();

        $categories = \App\Models\Category::get();

        // posts/index.blade.php ugradyar
        return view('posts.index', compact([
            'posts',
            'categories',
            'f_category_id',
        ]));
    }

    //number=2
    public function postsShow($id)
    {
        $post = \App\Models\Post::where('id', $id)->firstOrFail();

        // posts/show.blade.php ugradyar
        return view('posts.show', compact('post'));
    }
}
