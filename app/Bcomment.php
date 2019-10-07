<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bcomment extends Model
{
    public function bpost()
    {
        return $this->belongsTo(Bpost::class);
    }
}
