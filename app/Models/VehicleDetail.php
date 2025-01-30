<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleDetail extends Model
{
    protected $fillable = [
        'vehicle_id',
        'stnk',
        'buku_kir',
        'kartu_tap_oli',
        'dongkrak',
        'ban_serep',
        'kunci_roda',
        'bbm_full',
        'lampu_utama',
        'lampu_belakang',
        'lampu_sein',
        'lampu_dalam',
        'lcd',
        'ac',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }
}
