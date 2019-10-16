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
            $table->string('uva_id',null);
            $table->string('cf_handle',null);
            $table->string('cf_level',null);
            $table->integer('cf_points',null);
            $table->integer('uva_points',null);
            $table->integer('total_points',null);
            
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
        Schema::dropIfExists('standing_infos');
    }
}
