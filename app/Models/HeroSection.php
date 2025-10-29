<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'highlight_text',
        'highlight_color',
        'cta_text',
        'cta_link',
        'search_placeholder',
        'background_color',
        'carousel_images',
        'is_active'
    ];

    protected $casts = [
        'carousel_images' => 'array',
        'is_active' => 'boolean'
    ];
}
