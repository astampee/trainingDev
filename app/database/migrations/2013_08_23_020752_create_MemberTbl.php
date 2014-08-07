<?php

use Illuminate\Database\Migrations\Migration;

class CreateMemberTbl extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            //<?php
            
            Schema::create('MemberTbl', function($table){
               $table->increments('id')->primary();
               $table->string('firstName', 128);
               $table->string('surname', 128);
               $table->string('email', 256);
               $table->string('username', 128)->unique();
               $table->string('password', 128);
               $table->date('dob');
               $table->string('sport', 128);
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
         //   <?php
            
            Schema::drop('MemberTbl');
	}

}