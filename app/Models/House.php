<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    public function houses()
    {
        return $this->hasMany('App\User');
    }

    public function housedetails()
    {
        return $this->hasOne('House_details');
    }

    public function houseaddress()
    {
        return $this->hasOne('House_address');
    }
}
