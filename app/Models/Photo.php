<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    
    public function getUrlPath()
    {
        return Storage::url($this->path);
    }
}
