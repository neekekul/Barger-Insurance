<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\WelcomeToBarger;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{
    //
    /**
     * Create a new controller instance.
     * All functions must be authenticated in this controller by the 'auth' middleware. Except logout of course.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application's registration view.
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('registration')
     *
     */
    protected function onCreate()
    {
        return view('/register');
    }

    /**
     * Handles registering the users input into the database as a new user!
     * Passing relevant data through the compact() to the view itself in the form of php variables.
     *
     * @return view('/registration', compact('msg'))
     *
     */
    public function onStore(RegistrationRequest $request){


        //pull all validated inputs into variables
        $username = $request->username;

        $email = $request->email;

        $password = $request->password;

        $passCheck = $request->password_confirmation;


        //count instances of said email address
        $count = User::where('email', $email)->count();

        //hash the validated password
        $hashed = Hash::make($password);

            //if there are no accounts with the same email address
            if($count == 0){

                    $user = new User;
                    $user->name = $username;
                    $user->email = $email;
                    $user->password = $hashed;

                //if the model is successfully saved to the database
                if($user->save()){
                    //set a success message
                    $msg = "Successfully registered";
                }
                else{
                    //set a failure message
                    $msg = "ERROR Registering...";
                }

            }else{
                //set a failure message
                $msg = "The account that you are registering already exists.";
            }

        auth()->login($user);

        Mail::to($user)->send(new WelcomeToBarger($user));

        session()->flash('message', $msg);


        //return the same view, so the same registration page will show again.
        //Only this time it has the $msg sent through
        return redirect()->home();
    }
}
