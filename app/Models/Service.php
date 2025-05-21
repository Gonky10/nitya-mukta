<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'subtitle',
        'description',
        'image',
        'benefits',
        'gallery',
        'testimonials',
        'price',
        'active'
    ];

    protected $casts = [
        'benefits' => 'array',
        'gallery' => 'array',
        'testimonials' => 'array',
        'active' => 'boolean',
        'price' => 'decimal:2'
    ];
}
