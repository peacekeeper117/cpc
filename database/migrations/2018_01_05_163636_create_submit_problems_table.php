<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submit_problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('time_limit',4,2);
            $table->integer('memory_limit');
            $table->string('author');
            $table->string('modified_by',null);
            $table->string('dataset_author',null);
            $table->string('data_in',null);
            $table->string('data_out',null);
            $table->boolean('completed');
            $table->date('reused_date',null);
            $table->string('last_used',null);
            $table->text('comment',null);
            $table->string('type',null);
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
        Schema::dropIfExists('submit_problems');
    }
}
