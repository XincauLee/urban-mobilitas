<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'isbn',
        'category',
        'description',
        'cover_image',
        'published_year',
        'uuid',
    ];

    protected static function booted()
    {
        static::creating(function ($book) {
            if (empty($book->uuid)) {
                $book->uuid = (string) Str::uuid();
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}