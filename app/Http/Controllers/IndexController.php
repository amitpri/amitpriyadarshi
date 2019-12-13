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

    	return view('pictures');
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
