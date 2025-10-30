<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'country_code',
        'description',
        'student_count',
    ];

    protected $casts = [
        'student_count' => 'integer',
    ];

    public function universities()
    {
        return $this->hasMany(\App\Models\University::class);
    }
}
