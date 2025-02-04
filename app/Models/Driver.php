<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['name', 'address', 'phone'];
    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
