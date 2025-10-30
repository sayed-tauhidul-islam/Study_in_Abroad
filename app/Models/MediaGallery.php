<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaGallery extends Model
{
    protected $table = 'media_gallery';

    protected $fillable = [
        'title',
        'image_url',
        'alt_text',
        'category',
        'entity_type',
        'entity_id',
        'file_size',
        'width',
        'height',
        'is_external',
        'display_order'
    ];

    protected $casts = [
        'is_external' => 'boolean',
    ];

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order', 'asc');
    }
}
