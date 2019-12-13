<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function profile()
    {

    	return view('profile');
    }

    public function pictures()
    {	
    	$listings = [];

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
