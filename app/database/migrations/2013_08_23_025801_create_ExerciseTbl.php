<?php

use Illuminate\Database\Migrations\Migration;

class CreateExerciseTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('ExerciseTbl', function($table){
               $table->increments('exerciseID')->primary();
               $table->string('exerciseName', 128);
               $table->string('exerciseType', 64);
               $table->string('measurement', 64);
               $table->text('description');
               $table->string('videoLink', 256);
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
	 Schema::drop('ExerciseTbl');
	}

}