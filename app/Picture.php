<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $casts = [

        'image' => 'array',
        'eventdate' => 'datetime',

    ];


    public function getEventdateAttribute($value) {

    	return \Carbon\Carbon::parse($value)->format('d-MY - G:i ');

	}
}
