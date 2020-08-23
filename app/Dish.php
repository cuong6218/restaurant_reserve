<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    public function tables()
    {
        return $this->belongsToMany(Table::class, 'table_dish', 'dish_id', 'table_id');
    }
}
