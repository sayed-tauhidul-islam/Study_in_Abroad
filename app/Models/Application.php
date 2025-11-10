<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'date_of_birth',
        'gender',
        'phone', 
        'address',
        'passport_number',
        'education_level',
        'english_proficiency',
        'test_score',
        'source_country', 
        'destination_country', 
        'intended_program',
        'intake_year',
        'intake_month',
        'course', 
        'message',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function sourceCountry()
    {
        return $this->belongsTo(Country::class, 'source_country');
    }

    public function destinationCountry()
    {
        return $this->belongsTo(Country::class, 'destination_country');
    }
}
