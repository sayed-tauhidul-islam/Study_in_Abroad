<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlideshowImage extends Model
{
    protected $fillable = [
        'image_url',
        'alt_text',
        'caption',
        'display_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order', 'asc');
    }
}
