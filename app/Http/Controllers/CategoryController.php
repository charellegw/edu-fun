<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // public function show($id)
    // {
    //     $category = Category::with('posts', 'subjects')->findOrFail($id);
    //     return view('pages.category.category_detail', compact('category'));
    // }
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $articles = $category->posts()->with('writer', 'category')->latest('posted_at')->get();

        return view('pages.category.categories', compact('category', 'articles'));
    }
}
