<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestlists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('phase');
            $table->integer('before');
            $table->string('time');
            $table->string('host');
            $table->integer('duration'); 
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
        Schema::dropIfExists('contestlists');
    }
}
