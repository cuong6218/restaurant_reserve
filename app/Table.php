<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function guests()
    {
        return $this->belongsToMany(Guest::class, 'table_guest', 'table_id', 'guest_id');
    }
}
