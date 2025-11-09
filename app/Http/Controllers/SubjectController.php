<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('category')->get();
        // return view('subjects.index', compact('subjects'));
    }

    public function show($id)
    {
        $subject = Subject::with('category')->findOrFail($id);
        // return view('subjects.show', compact('subject'));
    }
}
