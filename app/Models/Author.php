<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname'];

    public function books() //plurale -> 1 a N 
    {
        return $this->hasMany(Book::class);
    }
}
