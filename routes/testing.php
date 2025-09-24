<?php

use Illuminate\Support\Facades\Route;
use App\Services\BookImporter;

Route::get('/import-books/{query}', function ($query, BookImporter $importer) {
    $books = $importer->importFromApi($query, 5);
    return view('Testing.booksApi', compact('books'));
});
