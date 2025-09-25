<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleBook extends Model
{
    /** @use HasFactory<\Database\Factories\GoogleBookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'publisher',
        'published_date',
        'categories',
        'description',
        'thumbnail',
        'google_id',
    ];

}
