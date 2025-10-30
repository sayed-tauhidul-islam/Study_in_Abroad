<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentResource extends Model
{
    protected $fillable = [
        'title',
        'icon',
        'description',
        'button_text',
        'button_link',
        'border_color',
        'button_color',
        'text_color',
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
