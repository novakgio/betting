<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResultColumnsToPlacebetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('place_bets', function (Blueprint $table) {
            $table->integer("state")->default(2); //waiting state
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('place_bets', function (Blueprint $table) {
            $table->dropColumn("state");
        });
    }
}
