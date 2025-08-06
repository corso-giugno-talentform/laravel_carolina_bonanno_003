<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // $books = Book::simplePaginate(10);
        if (request()->search) {
            $books = Book::where('name', 'LIKE', '%' . request()->search . '%')->get(); // Si può aggiungere orWhere()
        } else {
            $books = Book::all();
        }

        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', compact('authors', 'categories'));
    }

    public function store(StoreBookRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('cover')) {
            $file_name = $request->file('cover')->getClientOriginalName();
            $path_image = $request->file('cover')->storeAs('covers', $file_name, 'public');
        }

        $book = Book::create([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages,
            'author_id' => $request->author_id,
            'cover' => $path_image,
        ]);

        $book->categories()->attach($request->categories);
        return redirect()->route('books.index')->with('success', 'Il libro é stato aggiunto alla libreria!');
    }

    public function show(Book $book)
    {

        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    public function update(Book $book, UpdateBookRequest $request)
    {
        $cover = $book->cover;
        if ($request->hasFile('cover')) {
            $file_name = $request->file('cover')->getClientOriginalName();
            $cover = $request->file('cover')->storeAs('covers', $file_name, 'public');
        }

        $book->update([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages,
            'author_id' => $request->author_id,
            'cover' => $cover,
        ]);

        $book->categories()->detach();
        $book->categories()->attach($request->categories);

        // $book->categories()->sync($request->categories);

        return redirect()->route('books.index')->with('success', 'Il libro é stato modificato!');
    }

    public function destroy(Book $book)
    {
        $book->categories()->detach();
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Il libro é stato eliminato!');
    }
}
