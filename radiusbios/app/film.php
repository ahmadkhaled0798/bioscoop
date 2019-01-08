<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

    public function planner() {
        return $this->belongsTo('\App\Planner');
    }

    public function reservation(){
        return $this->hasMany('\App\reservation');
    }


}
