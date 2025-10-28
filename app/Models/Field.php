<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $table = 'fields';

    protected $fillable = [
        'name',
        'description',
        'price_per_hour',
        'location',
        'latitude',
        'longtitude',
        'images',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price_per_hour' => 'decimal:2',
        'images' => 'array',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
