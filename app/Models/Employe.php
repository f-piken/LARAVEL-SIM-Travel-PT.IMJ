<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'position',
        'salary',
        'profile_photo_path',
    ];    
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
