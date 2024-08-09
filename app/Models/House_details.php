<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_name',
        'square_meters',
        'city',
        'barangay',
        'zipcode',
        'price',
    ];

    public function house_details()
    {
        return $this->belongsTo('House');
    }

}
