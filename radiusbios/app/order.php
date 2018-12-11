<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user(){
        return $this->belongsTo('\App\user');
    }

    public function ordered_ticket(){
        return $this->hasMany('\App\ordered_ticket');
    }
}

