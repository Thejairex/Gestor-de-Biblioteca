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
        'google_id',
        'title',
        'authors',
        'publisher',
        'published_date',
        'description',
        'thumbnail'
    ];
    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('covers')->singleFile();
    }
}
