<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contest_name');
            $table->string('session',null);
            $table->string('description',null);
            $table->string('passkey',null);
            $table->string('url');
            $table->dateTime('time');
            $table->float('duration');
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
        Schema::dropIfExists('contests_lists');
    }
}
