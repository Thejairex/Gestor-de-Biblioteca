<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Book extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'isbn',
        'authors',
        'publisher',
        'published_date',
        'categories',
        'description',
        'thumbnail',
        'stock',
        'status',
        'google_book_id',
    ];
    protected $dates = ['published_date'];

    public function googleBook()
    {
        return $this->belongsTo(GoogleBook::class);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_date');
    }
}
