<?php

use Illuminate\Database\Migrations\Migration;

class CreatePhaseTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create table
            Schema::create('PhaseTbl', function($table){
               $table->increments('phaseID')->primary();
               $table->string('phaseName', 128);
               $table->date('startDate');
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
                Schema::drop('PhaseTbl');
	}

}