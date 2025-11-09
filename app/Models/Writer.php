<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Writer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'gender'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
