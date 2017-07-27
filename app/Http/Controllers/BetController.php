<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Schema;
use App\PlaceBet;
use Datatables;
class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('Admin.AllBets');
    }

    public function yajraDatatable(){
        $bets = PlaceBet::select(['id','team_one','team_two','sport_name','winner_pick','start_time','created_at','state']);
        return Datatables::of($bets)
            ->addColumn('State', function ($bets) {
                $state="";
                if($bets->state==2){
                    $state =  "<a  class='btn btn-success'>WAITING</a>";
                }
                else if($bets->state==1){
                     $state =  "<a class='btn btn-warning'>WIN</a>";
                }else{
                    $state =  "<a  class='btn btn-danger'>LOSE</a>";
                }
                
               
                
                return $state;
                
            })->addColumn('edit', function ($bets) {
                $url = route('admin_side.pick.edit',$bets->id);
                return "<a href='$url' class='btn btn-success'>Change State</a>";
                        
            })
            ->make(true);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.AddBet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bet_columns = Schema::getColumnListing("place_bets");
        $PlaceBet = new PlaceBet;
        foreach($bet_columns as $bet_column){

            if(array_key_exists($bet_column,$request->all())){
                $PlaceBet->$bet_column= $request->$bet_column;
               
            }
        }

        $saveBet = $PlaceBet->save();
        if($saveBet) {
            session()->flash('successbet', 'Saved New Bet Successfully');
        }else{
            session()->flash('successbet', 'Some System Error,Not Added');
        }
        return redirect()->route('admin_side.pick.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bet  = PlaceBet::findOrFail($id);
        return view('Admin.EditBet',compact('bet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bet = PlaceBet::findOrFail($id);
        $bet_columns = Schema::getColumnListing("place_bets");
        
        foreach($bet_columns as $bet_column){

            if(array_key_exists($bet_column,$request->all())){
                $bet->$bet_column= $request->$bet_column;
               
            }
        }
        $bet->save();
        return redirect()->route('admin_side.pick.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
