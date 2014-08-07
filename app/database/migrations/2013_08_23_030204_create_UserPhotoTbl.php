<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserPhotoTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('UserPhotoTbl', function($table){
               $table->increments('userPhotoID')->primary();
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
            Schema::drop('UserPhotoTbl');
	}

}