<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Picture;
use App\Category;
use App\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $categories = Category::get(['id', 'name', ]);
 

         $blogs =  DB::select("SELECT  a.`id`, a.`name`, a.`summary`, a.`user_id`  , b.`name` as author , a.`category_id` , c.`name` as category_name 
                                       FROM `blogs` a , `users` b,  `categories` c
                                        WHERE  a.`user_id` = b.`id`
                                        AND a.`category_id` = c.`id` ");

        return view('welcome',compact('categories','blogs'));


    }

    public function show(Request $request)
    {
        
        $bid = $request->id;

        $blog = Blog::where('id',$bid)->first(['id', 'user_id', 'category_id', 'name', 'blog', 'tags', 'image1', 'image2']);

 //       $userid= $blog->user_id;

  //      $projects = Blog::find($bid)->project()->get();

        $projects ="";
        $subjects = "";
        $username = "";

 //       $subjects = Blog::find($bid)->subject()->get();

   //     $username = User::where('id', $userid)->first(['name'])->name;

        return view('blog',compact('blog', 'projects' , 'subjects' , 'username'));
    }

    public function profile()
    {

        return view('profile');
    }

    public function download()
    {

        $file= public_path(). "/jce_policy-8.zip";

        return response()->download($file, 'jce_policy-8.zip' );
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


    public function blogs()
    {

    	return view('blogs');
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
