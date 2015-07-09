<?php

/**
* 
*/
class UserTableSeeder extends Seeder {
	
	public function run() {
		// !! All existing users are deleted !!
		DB::table('users')->delete();

		User::create(array(
			'name' 			=> 'Mateo',
			'lastname' 		=> 'Quintero',
			'email' 		=> 'quinterom1592@gmail.com',
			'password' 		=> Hash::make('mdjqj'),
			'birthday' 		=> '1993-08-21',
			'permissions' 	=> 1,
			"goal"			=> "Entrenar mi fisico",
			"phone"			=> 2500213,
			"cellphone"		=> 3147509100
		));
	}
}