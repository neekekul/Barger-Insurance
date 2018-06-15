<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$img = Image::make(public_path('/images/before/IMG_courthouse.jpg'));
    	$img->save(public_path('/images/courthouse.jpg'));
        
        return view('/welcome', compact('img'));
    }
}
