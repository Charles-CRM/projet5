<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    
    public function recipes() {
        return $this->hasMany('App\Recipe', 'author_id');
    }
    
    public function photos() {
        return $this->hasMany('App\Photo', 'author_id');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment', 'author_id');
    }
}
