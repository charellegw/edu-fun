<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index()
    {
        $writers = [
            ['name' => 'John Doe', 'specialty' => 'Spesialis Data Science', 'image' => 'images/avatar/man.png'],
            ['name' => 'Jane Smith', 'specialty' => 'AI Researcher', 'image' => 'images/avatar/woman.png'],
            ['name' => 'Michael Tan', 'specialty' => 'Fullstack Developer', 'image' => 'images/avatar/man.png'],
            ['name' => 'John Doe', 'specialty' => 'Spesialis Data Science', 'image' => 'images/avatar/man.png'],
            ['name' => 'Jane Smith', 'specialty' => 'AI Researcher', 'image' => 'images/avatar/woman.png'],
            ['name' => 'Michael Tan', 'specialty' => 'Fullstack Developer', 'image' => 'images/avatar/man.png'],
            ['name' => 'John Doe', 'specialty' => 'Spesialis Data Science', 'image' => 'images/avatar/man.png'],
            ['name' => 'Jane Smith', 'specialty' => 'AI Researcher', 'image' => 'images/avatar/woman.png'],
            ['name' => 'Michael Tan', 'specialty' => 'Fullstack Developer', 'image' => 'images/avatar/man.png'],
        ];

        return view('pages.writer.writers', compact('writers'));
    }
}
