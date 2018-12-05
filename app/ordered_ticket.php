<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordered_ticket extends Model
{
    public function ordered_ticket(){
        return $this->hasMany('\App\Order');
    }

    public function tickets(){
        return $this->hasMany('\App\ticket');
    }
}
