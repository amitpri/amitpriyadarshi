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
 

         $blogs =  DB::select("SELECT  a.`id`, a.`name`, a.`summary`, a.`user_id`  , b.`name` as author 
                                        , a.`category_id` , c.`name` as category_name , a.`top` , a.`top2` , a.`featured` , a.`popular` 
                                       FROM `blogs` a , `users` b,  `categories` c
                                        WHERE  a.`user_id` = b.`id`
                                        AND a.`category_id` = c.`id` ");

        $blogs_top = $blogs;

        $blogs_featured = $blogs;

        $blogs_popular = $blogs;


         $bigdata_blogs =  DB::select("SELECT  a.`id`, a.`name`, a.`summary`, a.`user_id`  , b.`name` as author , a.`category_id` , c.`name` as category_name , a.`top` , a.`top2` , a.`featured` , a.`popular`  
                                       FROM `blogs` a , `users` b,  `categories` c
                                        WHERE  a.`user_id` = b.`id`
                                        AND a.`category_id` = c.`id`
                                        AND c.`name` = 'Big Data' 
                                        ORDER BY a.`top2` DESC LIMIT 4   ");


        $bigdata_blogs_top = $bigdata_blogs;

         $cloud_blogs =  DB::select("SELECT  a.`id`, a.`name`, a.`summary`, a.`user_id`  , b.`name` as author , a.`category_id` , c.`name` as category_name , a.`top`  , a.`top2` , a.`featured` , a.`popular` 
                                       FROM `blogs` a , `users` b,  `categories` c
                                        WHERE  a.`user_id` = b.`id`
                                        AND a.`category_id` = c.`id`
                                        AND c.`name` = 'Cloud' 
                                        ORDER BY a.`top2` DESC LIMIT 4 ");

        $cloud_blogs_top = $cloud_blogs;

         $dwh_blogs =  DB::select("SELECT  a.`id`, a.`name`, a.`summary`, a.`user_id`  , b.`name` as author , a.`category_id` , c.`name` as category_name, a.`top`   , a.`top2` , a.`featured` , a.`popular` 
                                       FROM `blogs` a , `users` b,  `categories` c
                                        WHERE  a.`user_id` = b.`id`
                                        AND a.`category_id` = c.`id`
                                        AND c.`name` = 'DWH'
                                        ORDER BY a.`top2` DESC LIMIT 4 ");

         $dwh_blogs_top =  $dwh_blogs;

        return view('welcome',compact('categories','blogs','blogs_top' , 'blogs_featured', 'blogs_popular', 'bigdata_blogs','bigdata_blogs_top'
            ,'cloud_blogs','cloud_blogs_top', 'dwh_blogs', 'dwh_blogs_top'));


    }

    public function show(Request $request)
    {
        
        $categories = Category::get(['id', 'name', ]);

        $bid = $request->id;

        $blog = Blog::where('id',$bid)->first(['id', 'user_id', 'category_id', 'name', 'blog', 'tags', 'image1', 'image2']);

 //       $userid= $blog->user_id;

  //      $projects = Blog::find($bid)->project()->get();

        $projects ="";
        $subjects = "";
        $username = "";

 //       $subjects = Blog::find($bid)->subject()->get();

   //     $username = User::where('id', $userid)->first(['name'])->name;

        return view('blog',compact('categories','blog', 'projects' , 'subjects' , 'username'));
    }

    public function category($blogid, $blogcategory)
    {
        
        $categories = Category::get(['id', 'name', ]);

        $blogid = $blogid;

        $blogs = Blog::where('category_id',$blogid)->get(['id', 'user_id', 'category_id', 'name', 'blog', 'tags', 'image1', 'image2']);

        return view( 'blogs',compact('categories','blogs'));
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
