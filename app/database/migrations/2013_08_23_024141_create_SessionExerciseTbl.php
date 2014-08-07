<?php

use Illuminate\Database\Migrations\Migration;

class CreateSessionExerciseTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('SessionExerciseTbl', function($table){
               $table->increments('sessionExerciseID')->primary();
               $table->integer('reps');
               $table->integer('sets');
               $table->integer('recovery');
               $table->integer('intensity');
               $table->boolean('hidden');
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
             Schema::drop('SessionExerciseTbl');
	}

}