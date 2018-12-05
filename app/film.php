<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    public function reservation(){
        return $this->hasMany('\App\reservation');
    }
}
