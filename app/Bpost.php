<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bpost extends Model
{
    /**
     * Get the commeent for the blog post
     */
    public function bcomments()
    {
        return $this->hasMany(Bcomment::class);
    }
}
