<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $table = "booking_details";

    protected $default = [
        'id',
        'booking_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'type',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'booking_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'age' => 'integer',
        'gender' => 'string',
        'type' => 'string',
    ];

    protected $fillable = [
        'booking_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'type',
    ];

    protected $appends = [];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
