<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function universities()
    {
        return $this->hasMany(\App\Models\University::class);
    }
}
