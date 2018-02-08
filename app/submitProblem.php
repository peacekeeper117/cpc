<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class submitProblem extends Model
{
    //
    protected $fillable = [
        'name','time_limit','memory_limit','author','modified_by','dataset_author','data_in','data_out','completed','reused_date','last_used','comment','type' 
        
    ];
}