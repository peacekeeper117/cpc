<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StandingsInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('standing_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('session');
            $table->string('uva_id');
            $table->string('cf_handle');
            $table->string('cf_level');
            $table->float('cf_points',8,3);
            $table->float('uva_points',8,3);
            $table->float('total_points',8,3);
            
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
        //
    }
}
