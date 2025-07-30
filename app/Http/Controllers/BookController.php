<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all();

        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {

        Book::create([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages,
            'cover' => $request->cover,
        ]);

        return redirect()->route('books.index')->with('success', 'Il libro é stato aggiunto alla libreria!');
    }
}
