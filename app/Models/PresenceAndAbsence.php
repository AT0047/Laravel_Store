<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresenceAndAbsence extends Model
{
    use HasFactory;
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
