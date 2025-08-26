<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabledDate extends Model
{
    protected $table = "disabled_dates";

    protected $default = [
        'id',
        'date',
        'type',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'date' => 'date',
        'type' => 'string',
    ];

    protected $fillable = [
        'date',
        'type',
    ];

    protected $appends = [];
}
