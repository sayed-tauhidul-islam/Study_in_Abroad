<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'country_code',
        'image_url',
        'capital',
        'currency',
        'language',
        'description',
        'details',
        'student_count',
        'tuition_range_min',
        'tuition_range_max',
        'living_cost_min',
        'living_cost_max',
        'visa_info',
        'work_opportunities',
        'universities_count',
    ];

    protected $casts = [
        'student_count' => 'integer',
        'tuition_range_min' => 'decimal:2',
        'tuition_range_max' => 'decimal:2',
        'living_cost_min' => 'decimal:2',
        'living_cost_max' => 'decimal:2',
        'universities_count' => 'integer',
    ];

    public function universities()
    {
        return $this->hasMany(\App\Models\University::class);
    }
}
