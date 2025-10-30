<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable = [
        'university_id',
        'name',
        'description',
        'duration',
        'level',
        'tuition_fee',
        'application_fee',
        'language',
        'requirements',
    ];

    protected $casts = [
        'tuition_fee' => 'decimal:2',
        'application_fee' => 'decimal:2',
    ];

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }
}
