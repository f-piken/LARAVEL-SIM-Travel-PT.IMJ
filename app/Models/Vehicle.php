<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'type',
        'license_plate',
        'capacity',
        'rental_price_per_day',
        'is_available',
    ];

    public function details()
    {
        return $this->hasOne(VehicleDetail::class, 'vehicle_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
