<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    protected $table = "booking_details";

    protected $default = [
        'id',
        'booking_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'identity_proof_type',
        'identity_proof_id',
        'identity_proof',
        'type',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'booking_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'age' => 'integer',
        'gender' => 'string',
        'identity_proof_type' => 'string',
        'identity_proof_id' => 'string',
        'identity_proof' => 'string',
        'type' => 'string',
    ];

    protected $fillable = [
        'booking_id',
        'first_name',
        'last_name',
        'age',
        'gender',
        'identity_proof_type',
        'identity_proof_id',
        'identity_proof',
        'type',
    ];

    protected $appends = [];

    public static $path = 'uploads/identityProofs';

    public static $downloadPath = 'uploads/identityProofs/zips';

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
