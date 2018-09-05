<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    public function recipes() {
        return $this->belongsToMany('App\Recipe');
    }
}
