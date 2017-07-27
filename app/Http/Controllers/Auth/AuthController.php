<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/registered_user';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|min:5',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'phone'=>'required|numeric|min:6',
            'username'=>'required|min:4|',
            'agreement'=>'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $confirmation_code = str_random(30);

        
        $user = User::create([
            'fullname' => $data['fullname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone'=>$data['phone'],
            'username' => $data['username'],
            'confirmation_code'=>$confirmation_code,
        ]);
       

        \Mail::send('pages.email_verify', ['confirmation_code'=>$confirmation_code], function($message) use($data){
            $message->from("gioskofieldsara@gmail.com", "From Bettinger" );
            $message->to($data['email'], $data['username'])
                ->subject('Verify your email address');
        });

        session(['unconfirm'=>'UNCONFIRMED EMAIL']);
        session(['unconfirmemail'=>'Confirmation Email Sent. Confirm It To See All Features']);
        session(['unconfirmthank'=>'Thanks For Registering  '. $user->username .' With Us']);
        return $user;


    }


}
