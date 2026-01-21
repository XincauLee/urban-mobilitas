<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    // Cast kolom features agar otomatis jadi Array saat diambil
    protected $casts = [
        'features' => 'array',
        'is_popular' => 'boolean',
    ];
}