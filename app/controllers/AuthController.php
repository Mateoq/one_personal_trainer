<?php

/**
* 
*/
class AuthController extends BaseController {
	
	public function showLogin() {
		// Check if we already logged in
		if (Auth::check()) {
			// Redirect to homepage
			return Redirect::to('/')->with('success', 'You are already logged in');
		}

		// Show the login page
		return View::make('auth/login');
	}

	public function postLogin() {
		// Get all the inputs

		$userData = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		// Declare the rules for the form validation.
		$rules = array(
			'email' => 'Required|Between:3,128|Email',
			'password' => 'Required|AlphaNum|Between:4,68'
		);

		// Validate inputs.
		$validator = Validator::make($userData, $rules);

		// Check if the form calidates with success.
		if ($validator->passes()) {
			// Try to log the user in
			if (Auth::attempt($userData)) {
				# Redirect to homepage
				return Redirect::to('')->with('success', 'Has ingresado satisfactoriamente');
			}
		}

		# Redirect to the login page.
		return Redirect::to('login')->withErrors($validator);
	}

	public function getLogout() {
		# Log  out
		Auth::logout();

		# Redirect to homepage
		return Redirect::to('')->with('success', 'You are logged out.');
	}

	public function postRegister() {
		// Get all the inputs
		$newUserData = array(
			"name" => Input::get("name"),
			"second_name" => Input::get("second_name"),
			"lastname" => Input::get("lastname"),
			"second_lastname" => Input::get("second_lastname"),
			"email" => Input::get("new_email"),
			"password" => Input::get("newpass"),
			"password_confirmation" => Input::get("newpass_confirmation"),
			"birthday" => Input::get("birthday"),
			"goal" => Input::get("goal")
		);

		// Declare the rules for the form validation.
		$rules = array(
			"name" => "Required|alpha|min:3",
			"second_name" => "alpha|min:3",
			"lastname" => "required|alpha|min:3",
			"second_lastname" => "alpha|min:3",
			"email" => "required|email|min:6|unique:user",
			"password" => "required|alpha_num|min:6|confirmed",
			"password_confirmation" => "same:password",
			"birthday" => "required|date|date_format:Y-m-d",
			"goal" => "required|alpha|min:6"
		);
	}
}