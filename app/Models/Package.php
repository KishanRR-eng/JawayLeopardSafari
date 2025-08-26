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
        'type',
        'status',
    ];

    protected $hidden = ['created_at', 'updated_at','deleted_at'];

    protected $casts = [
        'name' => 'string',
        'price' => 'double',
        'tourist_type' => 'string',
        'day_type' => 'string',
        'type' => 'string',
        'status' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'price',
        'tourist_type',
        'day_type',
        'type',
        'status',
    ];

    protected $appends = [];


    public function transportationVehicles()
    {
        return $this->hasManyThrough(TransportationVehicle::class, VehiclesMap::class, null, 'id', null, 'transportation_vehicle_id');
    }

    public function vehiclesMap()
    {
        return $this->hasMany(VehiclesMap::class, 'package_id');
    }
}
