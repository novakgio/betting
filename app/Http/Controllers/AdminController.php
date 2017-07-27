<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\PlaceBet;
use Datatables;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $verified_users = User::where('confirmed','=',1)->get()->count();
        $unverified_users = User::where('confirmed','=',0)->get()->count();
        $successful_bets = PlaceBet::where('state','=',1)->get()->count();
        $unsuccessful_bets = PlaceBet::where('state','=',0)->get()->count();
        return view('Admin.index',compact('verified_users','unverified_users','successful_bets','unsuccessful_bets'));
    }


    public function getAllUsersView(){
        return view('Admin.users');
    }



    public function getAllUsers(){
        $users = User::orderBy('created_at','desc')->select(['id','fullname','username','email','phone','created_at','confirmed','authority']);
       

        return Datatables::of($users)
            ->addColumn('State', function ($users) {
                if($users->authority==1){
                    $url =  url('admin_side/changeAuthority/0/'.$users->id);
                }
                else{
                    $url = url('admin_side/changeAuthority/1/'.$users->id);
                }
               
                return "<a href='$url' class='btn btn-success'>Change State</a>";
                        ;
            })
            ->make(true);
    }


    public function addAuthority($authority_number,$id){
        $user = User::findOrFail($id);
        $user->authority = $authority_number;
        $user->save();

        return redirect()->route('userview');
    }
}
