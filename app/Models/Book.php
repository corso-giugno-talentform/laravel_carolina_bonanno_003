<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Book extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = ['name', 'year', 'pages', 'author_id', 'cover']; // solo relazioni 1 a N o 1 a 1, elementi singoli

    public $asYouType = true;

    public function author() //singolare -> 1 a N
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
