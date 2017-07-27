<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\PlaceBet;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


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

        session()->flash('confirm', 'EMAIL CONFIRMED');
        session()->flash('confirmemail', 'Thank you again for confirming your email with us');
        session()->flash('confirmthank', "You're now ready To Start Working With Us");


        session()->forget('unconfirm');
        session()->forget('unconfirmemail');
        session()->forget('unconfirmthank');

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

    public function sendMessage(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone'=>'required',
            'text'=>'required'
        ]);


        \Mail::send('pages.contact_email', ['email'=>$request->email,'name'=>$request->name,'text'=>$request->text,'phone'=>$request->phone], function($message){
            $message->from("gioskofieldsara@gmail.com", "From Bettinger" );
            $message->to("gioskofield@gmail.com","haha")
                ->subject('From Bettinger');
        });

        session()->flash('sendemail','we got your email. we will respond quickly');
        return redirect()->route('contact');
    }

    public function today_pick(){
        return view('pages.today_pick');
    }


    public function AllPicks(){
        $allbets = PlaceBet::all();
        return view('pages.allpicks',compact('allbets'));
    }
}
