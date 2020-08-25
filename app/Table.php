<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
//    public function guests()
//    {
//        return $this->belongsToMany(Guest::class, 'table_guest', 'table_id', 'guest_id');
//    }
    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'table_dish', 'table_id', 'dish_id');
    }


}
