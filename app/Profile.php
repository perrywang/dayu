<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function locations()
    {
    	return $this->hasMany('App\Location');
    }

    public function businesses()
    {
    	return $this->hasMany('App\Business');
    }
}
