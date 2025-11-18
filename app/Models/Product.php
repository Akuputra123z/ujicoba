<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'stock',
        'price',
        'image',
        'images',
    ];

    protected $casts = [
        'images' => 'array', // multiple images
        'price' => 'decimal:2',
    ];
}
