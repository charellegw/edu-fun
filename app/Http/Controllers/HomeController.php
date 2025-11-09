<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 6 artikel terbaru
        $articles = Post::with('writer', 'category')->latest('posted_at')->take(6)->get();

        return view('pages.home', compact('articles'));
    }
}
