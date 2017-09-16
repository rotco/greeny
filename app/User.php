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
        'role_id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function posts(){
        return $this->hasMany('App\Post');
    }
    public function getEmailAttribute($name){
        return (strtoupper($name));
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function isAdmin(){
        if ($this->role->name=="Administrator"){
            return true;
        }
        return false;
    }

}
