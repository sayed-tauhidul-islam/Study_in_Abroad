<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuccessStory extends Model
{
    protected $fillable = [
        'student_name',
        'student_image_url',
        'university_name',
        'program_name',
        'country',
        'campus_image_url',
        'achievement_badge',
        'quote_text',
        'secondary_quote',
        'rating',
        'badges',
        'gradient_from',
        'gradient_to',
        'display_order',
        'is_active'
    ];

    protected $casts = [
        'badges' => 'array',
        'is_active' => 'boolean',
        'rating' => 'decimal:1',
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
