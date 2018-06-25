<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Image;
use Carbon\Carbon;
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
        $posts = Post::latest();

        if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();

        return view('/blog', compact('posts', 'archives'));
    }
    



    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onCreateQuote()
    {

        $imgLife = Image::make(public_path('/images/before/Family_Life_Insurance.png'))->resize(212, 212, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save( public_path('/images/familylifeinsurance.png') );

        $imgCar = Image::make(public_path('/images/before/Car_Insurance.png'))->resize(212, 212, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save( public_path('/images/carinsurance.png') );

        return view('/quote');
    }

}
