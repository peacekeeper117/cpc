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
<<<<<<< HEAD
            $table->string('uva_id',null);
            $table->string('cf_handle',null);
            $table->string('cf_level',null);
            $table->integer('cf_points',null);
            $table->integer('uva_points',null);
            $table->integer('total_points',null);
=======
            $table->string('uva_id');
            $table->string('cf_handle');
            $table->string('cf_level');
            $table->float('cf_points',8,3);
            $table->float('uva_points',8,3);
            $table->float('total_points',8,3);
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
            
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
