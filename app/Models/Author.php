<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname'];

    public function books() //plurale -> 1 a N 
    {
        return $this->hasMany(Book::class);
    }
}
