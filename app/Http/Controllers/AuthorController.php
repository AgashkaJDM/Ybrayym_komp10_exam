<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function authorsIndex()
    {
        // DataBase-den ahli awtorlar maglumatyny getiryar
        $awtorlar = \App\Models\Author::withCount('posts')->get();
        // 4 commit


        // authors/index.blade.php ugradyar
        return view(
            'authors.index',
            compact([
                'awtorlar'
            ])
        );
    }
}
