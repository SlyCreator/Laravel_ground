<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function shops()
    {
        return $this->belongsToMany('App\Models\Shop');
    }
}
