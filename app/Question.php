<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }

    public function submitter()
    {
    	return $this->belongsTo('App\User','submit_by');
    }
}
