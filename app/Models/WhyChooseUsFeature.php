<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyChooseUsFeature extends Model
{
    protected $fillable = [
        'title',
        'description',
        'icon',
        'gradient_from',
        'gradient_to',
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
