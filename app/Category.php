<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public $timestamps = false;

    public function parent()
    {
    	return $this->hasOne('App\Category','id','parent_id');
    }

    public function children()
    {
    	return $this->hasMany('App\Category','parent_id');
    }
}
