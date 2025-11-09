<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PopularController extends Controller
{
    public function index()
    {
        $articles = Post::with('writer', 'category')
                        ->latest('posted_at')
                        ->paginate(3);

        return view('pages.popular', compact('articles'));
    }
}
