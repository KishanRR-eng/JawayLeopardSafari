<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $table = "time_slots";

    protected $default = [
        'id',
        'name',
        'type',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'name' => 'string',
        'type' => 'string',
    ];

    protected $fillable = [
        'name',
        'type',
    ];

    protected $appends = [];

    public function disabledSlots()
    {
        return $this->hasMany(DisabledSlot::class, 'time_slot_id');
    }
}
