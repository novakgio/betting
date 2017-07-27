<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place_bets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("team_one",55);
            $table->string("team_two",55);
            $table->string("sport_name",55);
            $table->string("winner_pick",55);
            $table->string("start_time",25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('place_bets');
    }
}
