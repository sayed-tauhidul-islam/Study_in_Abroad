<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'university',
        'country',
        'program',
        'rating',
        'content',
        'year',
        'scholarship',
        'address',
        'consent',
        'is_approved'
    ];

    protected $casts = [
        'consent' => 'boolean',
        'is_approved' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the review.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
