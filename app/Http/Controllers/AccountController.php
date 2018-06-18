<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;
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

    /**
     * Handles comment creation on the lesson viewer view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('lessonViewer', compact('lesson', 'course', 'msg', 'instructors'))
     *
     */
    public function commentStore(){
        //first completely validate the users input
        $this->validate(request(), [
            'body' => 'required|string|max:2000',
        ]);

        //request variable
        //request variable
        $postComment = request('body');
        //ORM query
        $post = Post::where('title', request('title'))->first();

        $posts = Post::latest();

        if($title = request('title')){
            $posts->where('title', $title);
        }

        $posts = $posts->get();
        //string variable message
        $msg = '';
        //instantiate a new comment or (row in comments table) using the comment model.
        $comment = new Comment;
        //populate fields appropriately
        $comment->post_id = $post->id;
        $comment->user_id = auth()->user()->id;
        $comment->body = $postComment;
        //try to save the new comment and give the message a value
        if($comment->save()){
            $msg = 'Comment has been saved!';
        }else{
            $msg = 'Error saving comment!';
        }

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();

        session()->flash('message', $msg);

        return view('/layouts/blog/browseBlog', compact('post', 'posts', 'archives'));
    }

    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onBrowsePost()
    {
        $posts = Post::latest();

        if($title = request('title')){
            $posts->where('title', $title);
        }

        $posts = $posts->get();

        $post = Post::where('title', request('title'))->first();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();

        return view('/layouts/blog/browseBlog', compact('posts', 'archives', 'post'));
    }
}
