<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $fillable = [
        'service_id', 
        'boking_id', 
        'tanggal_service', 
        'keterangan', 
        'jumlah', 
        'debet', 
        'kredit',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
