<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    public function ordered_ticket(){
        return $this->hasMany('\App\Ordered_ticket');
    }

    public function reservation(){
        return $this->hasMany('\App\Reservation');
    }
}
