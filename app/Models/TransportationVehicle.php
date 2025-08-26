<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportationVehicle extends Model
{
    protected $table = "transportation_vehicles";

    protected $default = [
        'id',
        'name',
        'seats',
        'price',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'name' => 'string',
        'seats' => 'integer',
        'price' => 'double',
    ];

    protected $fillable = [
        'name',
        'seats',
        'price',
    ];

    protected $appends = [];


    public function package()
    {
        return $this->hasOneThrough(Package::class, VehiclesMap::class, null, 'id', null, 'package_id');
    }
}
