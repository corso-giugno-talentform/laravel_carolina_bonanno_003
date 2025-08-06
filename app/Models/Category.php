<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    public $asYouType = true;

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
