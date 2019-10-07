<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function items()
    {
        return $this->belongsToMany('App\Models\Item');
    }
}
