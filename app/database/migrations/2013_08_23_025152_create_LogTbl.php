<?php

use Illuminate\Database\Migrations\Migration;

class CreateLogTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('LogTbl', function($table){
               $table->increments('logID')->primary();
               $table->date('dateTime');
               $table->text('comments');
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
            Schema::drop('LogTbl');
	}

}