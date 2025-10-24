<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function country()
    {
        return $this->belongsTo(\App\Models\Country::class);
    }
}
