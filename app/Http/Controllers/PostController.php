<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('writer', 'category')->latest('posted_at')->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('writer', 'category')->findOrFail($id);
        return view('pages.category.category_detail', compact('post'));
    }

    // public function show($id)
    // {
    //     // Ambil query parameter category (opsional)
    //     $categoryName = $request->query('category');

    //     // Query awal: ambil semua post dengan writer & category
    //     $query = Post::with('writer', 'category')->latest('posted_at');

    //     // Kalau ada filter category
    //     if ($categoryName) {
    //         $query->whereHas('category', function ($q) use ($categoryName) {
    //             $q->where('name', $categoryName);
    //         });
    //     }

    //     $posts = $query->get();

    //     return view('posts.index', compact('posts', 'categoryName'));
    // }
}
