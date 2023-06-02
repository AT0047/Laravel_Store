<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function create_by()
    {
        return $this->belongsTo(User::class, 'create_by', 'id');
    }
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
    public function sale()
    {
        return $this->hasMany(ProducSales::class);
    }
}
