<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_id', 'vehicle_id', 'employe_id',
        'destination', 'start_date', 'end_date',
        'deposit', 'balance', 'charge', 'description', 'status'
    ];
    public function details()
    {
        return $this->hasOne(BookingDetail::class, 'booking_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
