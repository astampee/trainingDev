<?php

use Illuminate\Database\Migrations\Migration;

class CreateSessionLogTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('SessionLogTbl', function($table){
               $table->increments('sessionLogID')->primary();
               $table->date('dateTime');
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
            
             Schema::drop('SessionLogTbl');
	}

}