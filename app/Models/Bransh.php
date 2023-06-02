<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bransh extends Model
{
    use HasFactory;
    public function company()
    {
        return $this->belongsTo(company::class);
    }
}
