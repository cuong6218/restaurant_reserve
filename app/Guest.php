<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    protected $fillable = [
        'name', 'phone', 'note', 'guest_number', 'booking_date', 'time_start', 'time_end', 'table_id',
    ];
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }
//    public function tables()
//    {
//        return $this->belongsToMany(Table::class, 'table_guest', 'guest_id', 'table_id');
//    }
    public function getAttributeDate($value)
    {
        return  Carbon::parse($value)->format('Y-m-d\Th:m:s');
    }

}
