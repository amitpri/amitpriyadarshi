<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Picture;
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

    public function picture( $id, $name)
    {    

        $id = $id;
        $name = $name;
 

        $picturedetails = Picture::where('status','=',1)->where('id','=',$id)->first(['id', 'name',  'details',  'image' , 'profile_photo' , 'eventdate']); 

        return view('picture', compact('picturedetails'));
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
