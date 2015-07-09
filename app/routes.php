<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showHome', 'as' => 'home'));

// Services
Route::get("servicios/reduccion_tejido_graso", array("uses" => "HomeController@showFattyTissueReduction", "as" => "servicios/reduccion_tejido_graso"));
Route::get("servicios/tonificacion", array("uses" => "HomeController@showTonning", "as" => "servicios/tonificacion"));
Route::get("servicios/aumento_masa_muscular", array("uses" => "HomeController@showBuildMuscle", "as" => "servicios/aumento_masa_muscular"));
Route::get("servicios/deportes", array("uses" => "HomeController@showSports", "as" => "servicios/deportes"));
Route::get("servicios/clases_especializadas", array("uses" => "HomeController@showSpecClases", "as" => "servicios/clases_especializadas"));
Route::get("servicios/otra_meta", array("uses" => "HomeController@showOtherGoal", "as" => "servicios/otra_meta"));
Route::post("send_mail", "HomeController@postMail");

// Plans
Route::get("planes/presencial", array("uses" => "HomeController@showPersonalPlans", "as" => "planes/presencial"));
Route::get("planes/proceso_pago/{id_plan}", array("uses" => "HomeController@showProcesoPago", "as" => "planes/proceso_pago/{id_plan}"));

// Authentication
Route::get('login', array('uses' => 'AuthController@showLogin', 'as' => 'login'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout'); 

// Register User
Route::post("register", 'AuthController@postRegister');