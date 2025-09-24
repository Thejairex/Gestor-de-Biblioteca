<?php

use App\Services\BookImporter;
use App\Services\GoogleBookService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('books:sync {query}', function ($query, GoogleBookService $importer) {
    $books = $importer->search($query);
    $this->comment($books);
});
