<?php

use Illuminate\Database\Migrations\Migration;

class CreateWeekTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('WeekTbl', function($table){
               $table->increments('weekID')->primary();
               $table->string('day', 128);
               $table->integer('order');
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
               Schema::drop('WeekTbl');
	}

}