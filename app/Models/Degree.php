<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable = [
        'name',
        'description',
        'level',
        'duration_years',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'duration_years' => 'integer'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByLevel($query, $level)
    {
        return $query->where('level', $level);
    }

    public function universities()
    {
        return $this->belongsToMany(University::class);
    }
}
