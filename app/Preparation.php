<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preparation extends Model
{
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
    
    public function instructions() {
        return $this->hasMany('App\Instruction');
    }
    
    public function ingredients() {
        return $this->belongsToMany('App\Ingredient');
    }
}
