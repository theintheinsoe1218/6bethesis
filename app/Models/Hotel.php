<?php

namespace App\Models;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'location', 'images'];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
