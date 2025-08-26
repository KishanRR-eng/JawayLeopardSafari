<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $table = "bookings";

    protected $default = [
        'id',
        'first_name',
        'last_name',
        'phone_code',
        'mobile_no',
        'email',
        'price',
        'time_slot_id',
        'vehicle_name',
        'seats',
        'vehicle_price',
        'adult',
        'child',
        'tourist_type',
        'day_type',
        'type',
        'booking_date',
        'payment_id',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'phone_code' => 'string',
        'mobile_no' => 'string',
        'email' => 'string',
        'price' => 'double',
        'time_slot_id' => 'integer',
        'vehicle_name' => 'string',
        'seats' => 'integer',
        'vehicle_price' => 'double',
        'adult' => 'integer',
        'child' => 'integer',
        'tourist_type' => 'string',
        'day_type' => 'string',
        'type' => 'string',
        'booking_date' => 'date',
        'payment_id' => 'string',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_code',
        'mobile_no',
        'email',
        'price',
        'time_slot_id',
        'vehicle_name',
        'seats',
        'vehicle_price',
        'adult',
        'child',
        'tourist_type',
        'day_type',
        'type',
        'booking_date',
        'payment_id',
    ];

    protected $appends = [];

    public function details()
    {
        return $this->hasMany(BookingDetail::class, 'booking_id');
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id');
    }
}
