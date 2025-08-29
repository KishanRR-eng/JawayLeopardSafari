<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlotMap extends Model
{
    protected $table = "time_slot_map";

    protected $default = [
        'id',
        'package_id',
        'time_slot_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'package_id' => 'integer',
        'time_slot_id' => 'integer',
    ];

    protected $fillable = [
        'package_id',
        'time_slot_id',
    ];

    protected $appends = [];


    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id');
    }
}
