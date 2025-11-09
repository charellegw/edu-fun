<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    protected $fillable = ['title', 'short_description', 'content', 'writer_id', 'category_id', 'posted_at'];

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
