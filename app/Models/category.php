<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    public function create_by()
    {
        return $this->belongsTo(User::class, 'create_by', 'id');
    }
    public function product()
    {
        return $this->hasMany(product::class);
    }
}
