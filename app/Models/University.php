<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name',
        'country_id',
        'description',
        'ranking',
        'website',
        'logo_url',
        'image_url',
        'environment_quality',
        'num_courses',
        'bd_students'
    ];

    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }

    public function courses()
    {
        return $this->hasMany(\App\Models\Course::class);
    }

    public function scholarships()
    {
        return $this->hasMany(\App\Models\Scholarship::class);
    }

    public function applications()
    {
        return $this->hasMany(\App\Models\Application::class);
    }

    public function degrees()
    {
        return $this->belongsToMany(\App\Models\Degree::class);
    }
}
