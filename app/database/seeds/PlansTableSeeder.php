<?php

/**
* 
*/
class PlansTableSeeder extends Seeder {
	
	public function run() {
		// !! All existing users are deleted !!
		DB::table("plans")->delete();

		Plan::create(array(
			"plan" 			=> "One Personal Class",
			"image" 		=> "one_personal_class.png",
			"price" 		=> "35.000"
		));

		Plan::create(array(
			"plan" 			=> "Two Personal Class X Semana",
			"image" 		=> "two_personal_class.png",
			"price" 		=> "260.000"
		));

		Plan::create(array(
			"plan" 			=> "Three Personal Class X Semana",
			"image" 		=> "three_personal_class.png",
			"price" 		=> "350.000"
		));

		Plan::create(array(
			"plan" 			=> "Four Personal Class",
			"image" 		=> "four_personal_class.png",
			"price" 		=> "440.000"
		));

		Plan::create(array(
			"plan" 			=> "Five Personal Class X Semana",
			"image" 		=> "five_personal_class.png",
			"price" 		=> "500.000"
		));
	}
}