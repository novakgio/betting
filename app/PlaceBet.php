<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceBet extends Model
{
    //

    protected $table = "place_bets";

    protected $fillable = [
        'team_one','team_two', 'sport_name', 'winner_pick','start_time','state',
    ];
}
