<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Contact extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'message','subject',
    ];
 
 

}

