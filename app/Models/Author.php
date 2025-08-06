<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Author extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['firstname', 'lastname'];

    public $asYouType = true;

    public function books() //plurale -> 1 a N 
    {
        return $this->hasMany(Book::class);
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
