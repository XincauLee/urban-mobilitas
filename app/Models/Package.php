<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name',
        'price',
        'features',
        'is_popular',
        'cta_link'
    ];

    protected $casts = [
        'features' => 'array', // Otomatis convert JSON <-> Array
        'is_popular' => 'boolean',
    ];
}