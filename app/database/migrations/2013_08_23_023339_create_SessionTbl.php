<?php

use Illuminate\Database\Migrations\Migration;

class CreateSessionTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('SessionTbl', function($table){
               $table->increments('sessionID')->primary();
               $table->string('sessionName', 128);
               $table->string('sessionTime', 128);
               $table->string('sessionLocation', 128);
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
              Schema::drop('SessionTbl');
	}

}