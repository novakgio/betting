<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function afterRegister(){
        return view('auth.registereduser');
    }

    public function confirmAfterRegister($confirmation_code){
        
        $user = User::where('confirmation_code','=',$confirmation_code)->first();

        

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

       session()->flash('confirmemail', 'EMAIL CONFIRMED');
        session()->flash('emailtext', 'Thank you again for confirming your email with us');
        session()->flash('whotosay', "You're now ready To Start Working With Us");

        return \Redirect::route('registered_user');




    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    public function contactUs(){
        return view('pages.contact');
    }

    public function aboutUs(){
        return view('pages.about');
    }
}
