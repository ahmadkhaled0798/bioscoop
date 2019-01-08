<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    public function films() {
        return $this->hasMany('\App\Film');
    }
}
