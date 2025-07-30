<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // $array = [
    //    ['title' => 'Libro1'],
    //    ['title' => 'Libro2'],
    //    ['title' => 'Libro3'],
    //];
    // $array = Book::all(); //Select * FROM books
    // return view('welcome', ['libri' => $array]);
    // dd(Book::all());
    return view('welcome', ['libri' => Book::all()]);
});
