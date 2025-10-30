<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'current_education_level',
        'field_of_interest',
        'preferred_countries',
        'preferred_degrees',
        'budget_min',
        'budget_max',
        'study_mode',
        'scholarship_required',
        'english_proficiency',
        'gpa_score',
        'work_experience',
        'preferred_courses',
        'intake_preference',
        'additional_requirements',
    ];

    protected $casts = [
        'preferred_countries' => 'array',
        'preferred_degrees' => 'array',
        'preferred_courses' => 'array',
        'scholarship_required' => 'boolean',
        'budget_min' => 'decimal:2',
        'budget_max' => 'decimal:2',
        'gpa_score' => 'decimal:2',
    ];

    public function recommendation()
    {
        return $this->hasOne(Recommendation::class);
    }
}
