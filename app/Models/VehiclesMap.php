<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiclesMap extends Model
{
    protected $table = "vehicles_map";

    protected $default = [
        'id',
        'package_id',
        'transportation_vehicle_id',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'package_id' => 'integer',
        'transportation_vehicle_id' => 'integer',
    ];

    protected $fillable = [
        'package_id',
        'transportation_vehicle_id',
    ];

    protected $appends = [];


    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function transportationVehicle()
    {
        return $this->belongsTo(TransportationVehicle::class, 'transportation_vehicle_id');
    }
}
