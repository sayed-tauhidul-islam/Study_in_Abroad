<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    protected $fillable = [
        'user_preference_id',
        'recommended_universities',
        'recommended_countries',
        'recommended_courses',
        'recommended_degrees',
        'scholarship_options',
        'cost_breakdown',
        'work_opportunities',
        'match_score',
        'summary',
    ];

    protected $casts = [
        'recommended_universities' => 'array',
        'recommended_countries' => 'array',
        'recommended_courses' => 'array',
        'recommended_degrees' => 'array',
        'scholarship_options' => 'array',
        'cost_breakdown' => 'array',
        'work_opportunities' => 'array',
        'match_score' => 'integer',
    ];

    public function userPreference()
    {
        return $this->belongsTo(UserPreference::class);
    }
}
