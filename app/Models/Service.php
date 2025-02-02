<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'vehicle_id', 
        'total',
    ];

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class);
    }
    public function details()
    {
        return $this->hasOne(ServiceDetail::class,'service_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
