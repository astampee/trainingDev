<?php

use Illuminate\Database\Migrations\Migration;

class CreateHealthTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::create('HealthTbl', function($table){
               $table->increments('healthID')->primary();
               $table->date('dateTime');
               $table->integer('mood');
               $table->integer('sleep');
               $table->integer('soreness');
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
            Schema::drop('HealthTbl');
	}

}