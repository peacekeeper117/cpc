<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class standingInfo extends Model
{
    //
    protected $fillable = [
        'name','uva_id','cf_handle','cf_level','cf_points','uva_points','total_points',
    ];
}
