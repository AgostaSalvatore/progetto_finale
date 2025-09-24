<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    public function softwareHouse()
    {
        return $this->belongsTo(SoftwareHouse::class);
    }
}
