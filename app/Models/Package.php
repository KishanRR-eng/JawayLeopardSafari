<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = "packages";

    protected $default = [
        'id',
        'name',
        'price',
        'tourist_type',
        'day_type',
        'status',
    ];

    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    protected $casts = [
        'name' => 'string',
        'price' => 'double',
        'tourist_type' => 'string',
        'day_type' => 'string',
        'status' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'price',
        'tourist_type',
        'day_type',
        'status',
    ];

    protected $appends = [];


    public function timeSlots()
    {
        return $this->hasManyThrough(TimeSlot::class, TimeSlotMap::class, null, 'id', null, 'time_slot_id');
    }

    public function timeSlotMap()
    {
        return $this->hasMany(TimeSlotMap::class, 'package_id');
    }
}
