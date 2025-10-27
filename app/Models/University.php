<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
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
}
