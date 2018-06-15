<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Mail\WelcomeToBarger;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    //
     

    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onCreateMeet()
    {
        return view('/meet');
    }

    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onCreateBlog()
    {
        $posts = Post::latest()->get();
        return view('/blog', compact('posts'));
    }
    
    

}
