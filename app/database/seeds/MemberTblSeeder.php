<?php

class MemberTblSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
                DB::table('MemberTbl')->delete();
                
		User::create(array(
               'firstName' => 'First',
               'surname' => 'Name',
               'email' => 'first@name.com',
               'username' => 'firstname',
               'password' => Hash::make('password'),
                ));
                
                User::create(array(
               'firstName' => 'Second',
               'surname' => 'Name',
               'email' => 'second@name.com',
               'username' => 'secondname',
               'password' => Hash::make('password'),
                ));
	}

}

