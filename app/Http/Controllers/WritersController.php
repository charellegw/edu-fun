<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;
use App\Models\Post;

class WritersController extends Controller
{
    public function index()
    {
        
        $writers = Writer::all();
        return view('pages.writer.writers', compact('writers'));
    }
    
    // public function show($id)
    // {
    //     $writer = Writer::with('posts')->findOrFail($id);
    //     return view('pages.writer.writer_detail', compact('writers'));
    // }

    public function show($id)
    {
        $writer = Writer::findOrFail($id); // ambil writer berdasarkan id
        $articles = Post::where('writer_id', $writer->id)->with('category')->get(); // ambil semua post writer

        return view('pages.writer.writer_detail', compact('writer', 'articles'));
    }
}
