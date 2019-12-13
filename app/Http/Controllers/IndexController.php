<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function profile()
    {

    	return view('profile');
    }

    public function pictures()
    {	
    	$listings = DB::select("SELECT  a.`id` ,a.`name`,a.`details`  , a.`image`, a.`profile_photo`, a.`eventdate`
                                            FROM `pictures` a  
                                            WHERE  a.`status` = 1   ");
 

    	return view('pictures', compact('listings'));
    }


    public function videos()
    {

    	return view('videos');
    }


    public function mywork()
    {

    	return view('mywork');
    }


    public function contact()
    {

    	return view('contact');
    }
}
