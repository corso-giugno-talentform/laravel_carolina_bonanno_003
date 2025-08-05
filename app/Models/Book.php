<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['name', 'year', 'pages', 'author_id', 'cover']; // solo relazioni 1 a N o 1 a 1, elementi singoli

    public function author() //singolare -> 1 a N
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
