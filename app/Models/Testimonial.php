<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'university',
        'image',
        'review',
        'rating',
        'order',
        'is_active'
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_active' => 'boolean'
    ];
}
