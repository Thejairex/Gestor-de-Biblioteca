<?php

namespace App\Jobs;

use App\Models\Book;
use App\Models\GoogleBook;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncGoogleBooksJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $googleBooks = GoogleBook::all();

        foreach ($googleBooks as $googleBook) {
            $book = Book::where('google_book_id', $googleBook->id)->first();

            if ($book) {
                $book->increment('stock');
            } else {
                $book = Book::create([
                    'title' => $googleBook->title,
                    'authors' => $googleBook->authors,
                    'thumbnail' => $googleBook->thumbnail,
                    'publisher' => $googleBook->publisher,
                    'published_date' => $googleBook->published_date,
                    'categories' => 'Sin categorizar',
                    'isbn' => null,
                    'stock' => 1,
                    'description' => $googleBook->description,
                    'google_book_id' => $googleBook->id,
                ]);
            }
        }
    }
}
