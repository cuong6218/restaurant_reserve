<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'phone', 'note', 'guest_number', 'booking_date'
    ];
    public function tables()
    {
        return $this->belongsToMany(Table::class, 'table_guest', 'guest_id', 'table_id');
    }
    public function getAttributeDate($value)
    {
        return  Carbon::parse($value)->format('Y-m-d\Th:m:s');
    }
}
