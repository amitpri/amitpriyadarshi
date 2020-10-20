<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function user()
    {

        return $this->belongsTo('App\User');

    } 

     public function category()
    {

        return $this->belongsTo('App\Category');

    } 

    public function project()
    {

    	return $this->belongsToMany('App\Project','blog_projects');

    }

    public function subject()
    {

    	return $this->belongsToMany('App\Subject','blog_subjects');

    }
}
