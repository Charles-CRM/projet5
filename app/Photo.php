<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function recipe() {
        return $this->belongsTo('App/Recipe');
    }
    
    public function author() {
        return $this->belongsTo('App/User');
    }
}
