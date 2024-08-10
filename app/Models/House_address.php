<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House_address extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'house_number_street',
        'province',
        'city',
        'barangay',
        'zipcode',
    ];

    public function house_address()
    {
        return $this->belongsTo('House');
    }


}
