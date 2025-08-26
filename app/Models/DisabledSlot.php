<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabledSlot extends Model
{
    protected $table = "disabled_slots";

    protected $default = [
        'id',
        'time_slot_id',
        'date',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'time_slot_id' => 'integer',
        'date' => 'date',
    ];

    protected $fillable = [
        'time_slot_id',
        'date',
    ];

    protected $appends = [];

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id');
    }
}
