<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
        'name',
        'user_id',
        'field_id',
        'date',
        'start_time',
        'end_time',
        'total_price',
        'status',
        'phone_number',
        'note',
        'google_event_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
