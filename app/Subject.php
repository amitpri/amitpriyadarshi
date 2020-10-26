<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function category()
    {

        return $this->belongsTo('App\Category', 'category_id');

    }  

    public function blog()
    {

    	return $this->belongsToMany('App\Blog','blog_subjects');

    }
}
