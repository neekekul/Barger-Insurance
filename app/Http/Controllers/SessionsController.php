<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SessionsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     * All functions must be authenticated in this controller by the 'auth' middleware. Except logout of course.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('destroy');
    }

    /**
     * Show the application's Login view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('Login')
     *
     */
    protected function onCreate(){
        //create the instructor login view
        //display it route it, whatever you wanna call it
        return view('/login');
    }

    /**
     * Handles authenticating a users final request for login permission in the Login view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return redirect('/home')
     * @return back()->withErrors(['message' => 'username or password is incorrect!']);
     *
     */
    public function makeSession(LoginRequest $request){


            if (auth()->attempt(['email' => request('email'), 'password' => request('password')])){
                session()->flash('message', 'Logged in');

                return redirect()->home();
            }
            else{

                return back()->withErrors([
                'message' => 'username or password is incorrect!'
            ]);

            }


    }

    public function destroy(){
        session()->flash('message', 'Logged out');

        auth()->logout();

        return redirect()->home();
    }
}
