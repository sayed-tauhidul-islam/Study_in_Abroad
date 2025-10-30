<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniversityRanking extends Model
{
    protected $fillable = [
        'university_id',
        'rank_number',
        'ranking_org',
        'year',
        'campus_image_url',
        'logo_url',
        'badge_text',
        'badge_color',
        'border_color',
        'is_featured',
        'display_order'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order', 'asc');
    }
}
