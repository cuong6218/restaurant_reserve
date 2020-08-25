<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use SoftDeletes;
    protected $dates = ['delete_at'];
    public function tables()
    {
        return $this->belongsToMany(Table::class, 'table_dish', 'dish_id', 'table_id');
    }
}
