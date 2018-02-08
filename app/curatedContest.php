<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curatedContest extends Model
{
    //
    protected $fillable = [
        'name', 'min_session', 'description','password','url','duration','time','admins',
    ];
}
