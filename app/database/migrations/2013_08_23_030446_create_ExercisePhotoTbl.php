<?php

use Illuminate\Database\Migrations\Migration;

class CreateExercisePhotoTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('ExercisePhotoTbl', function($table){
               $table->increments('exercisePhotoID')->primary();
               $table->date('dateTime');
               $table->string('path', 256);
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
            Schema::drop('ExercisePhotoTbl');
	}

}