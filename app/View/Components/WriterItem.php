<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class WriterItem extends Component
{
    public $id;
    public $name;
    public $specialty;
    public $image;

    public function __construct($id, $name, $specialty, $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->specialty = $specialty;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.writer-item');
    }
}
