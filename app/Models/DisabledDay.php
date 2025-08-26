<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisabledDay extends Model
{
    protected $table = "disabled_days";

    protected $default = [
        'id',
        'day',
        'type',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'day' => 'string',
        'type' => 'string',
    ];

    protected $fillable = [
        'day',
        'type',
    ];

    protected $appends = [];
}
