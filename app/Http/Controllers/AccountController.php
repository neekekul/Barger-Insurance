<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Image;
use Auth;

class AccountController extends Controller
{
    //
    //
    /**
     * Create a new controller instance.
     * All functions must be authenticated in this controller by the 'auth' middleware. Except logout of course.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onCreatePost()
    {
        return view('/layouts/blog/createPost');
    }

    /**
     * Handles lesson creation in the lesson creator view
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('instructorHome', compact('msg', 'lessons', 'instructors'))
     *
     */
    public function postStore(){
        //first completely validate the users input
        $this->validate(request(), [
            'title' => 'required|string|alpha_dash|max:100',
            'body' => 'required|string|alpha_dash|max:13000',
            'image' => 'file|image',
            'note' => 'string|max:700',
        ]);
        //assign the entire request to a variable
        $request = request();
        //prepare a filename variable
        $filename = '';
        //if there was an image, save, resize.
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1100, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save( public_path('/uploads/images/' . $filename) );
        }
        //ORM query
        $user = Auth::user();
        $ID = $user->id;
        //pull the fields into php variables
        $title = request('title');
        $body = request('body');
        $note = request('note');
        //prepare a message
        $msg = '';
        //instantiate and assign a new lesson in the lessons table
        $post = new Post;

        $post->title = $title;
        $post->user_id = $ID;
        $post->body = $body;
        $post->image = $filename;
        $post->summary = $note;
        //try to save an give the message a value
        if ($post->save()){
            $msg = 'Your post has been saved!';
        }else{
            $msg = 'Post has failed to be saved correctly.';
        }

        session()->flash('message', $msg);
        return view('/layouts/blog/createPost');
    }
}
