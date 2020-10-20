<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subject()
    {

        return $this->hasMany('App\Subject');

    } 

    public function blog()
    {

    	return $this->hasMany('App\Blog');

    }
}
