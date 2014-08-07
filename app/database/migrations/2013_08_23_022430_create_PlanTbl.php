<?php

use Illuminate\Database\Migrations\Migration;

class CreatePlanTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//create table
           Schema::create('PlanTbl', function($table){
               $table->increments('planID')->primary();
               $table->string('planName', 128);
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
		//cancel table
            Schema::drop('PlanTbl');
	}

}