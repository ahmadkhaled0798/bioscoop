<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hall extends Model
{
    public function reservation(){
        return $this->hasMany('\App\reservation');
    }

    public function chair(){
        return $this->belongsTo('\App\chair');
    }
}
