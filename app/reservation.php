<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public function ticket(){
        return $this->hasMany('\App\ticket');
    }

    public function film(){
        return $this->hasMany('\App\film');
    }

    public function hall(){
        return $this->hasMany('\App\hall');
    }
}
