<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'homepage'])->name('pages.homepage');
Route::middleware(['auth'])->group(function () {
    Route::get('/libri', [BookController::class, 'index'])->name('books.index');
    Route::get('/libri/aggiungi-libro', [BookController::class, 'create'])->name('books.create');
    Route::post('/libri/salva-libro', [BookController::class, 'store'])->name('books.store');
});
Route::get('/libri/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/libri/{book}/modifica', [BookController::class, 'edit'])->name('books.edit');
Route::put('/libri/{book}/aggiorna', [BookController::class, 'update'])->name('books.update');

Route::delete('/libri/{book}/elimina', [BookController::class, 'destroy'])->name('books.destroy');
