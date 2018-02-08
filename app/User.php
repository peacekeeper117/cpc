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
<<<<<<< HEAD
        'name','ex', 'email','username', 'password','session','cf_handle','dev_id','uva_id',
=======
        'name', 'email', 'password','session','cf_handle','dev_id','uva_id',
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
