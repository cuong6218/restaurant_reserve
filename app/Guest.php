<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'phone', 'note', 'guest_number', 'booking_date'
    ];
}
