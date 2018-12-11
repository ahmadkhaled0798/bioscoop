<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chair extends Model
{
    public function hall(){
        return $this->hasMany('\App\hall');
    }
}
