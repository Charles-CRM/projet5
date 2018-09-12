<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function recipe() {
        return $this->belongsTo('App\Recipe');
    }
    
    public function author() {
        return $this->belongsTo('App\User');
    }
    
    // Custom accessors :
    
    public function getCreatedAtAttribute($date) {
        $day = substr($date, 0, 10);
        $hour = substr($date, 11, 8);
        $dayParts = explode('-', $day);
        $hourParts = explode(':', $hour);
        $date = $dayParts[2] . '/' . $dayParts[1] . '/' . $dayParts[0] . ' à ' . $hourParts[0] . 'h' . $hourParts[1];
        return $date;
    }
}
