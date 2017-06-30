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

    public function post() {
        // return $this->hasOne('App\post','the_user_id'); //user_id
        return $this->hasOne('App\Post');
    }

     public function posts() {
        
        return $this->hasMany('App\Post');
    }


    public function roles() {

        // return $this->belongsToMany('App\Role'); // second parameter default role_user
        // return $this->belongsToMany('App\Role','user_roles','user_id','role_id'); 

        return $this->belongsToMany('App\Role')->withPivot('created_at');

    }

     public  function photos() {
        return $this->morphMany('App\Photo','imageable');
    }

    
}
