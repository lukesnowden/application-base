<?php

$bindings = array();

foreach( $bindings as $interface => $repository ) {
	App::bind( $interface, $repository );
}

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

Route::get(  '/', 				array( 'as' => 'home', 		'uses' => 'FrontController@displayHomePage' ) );
Route::get(  '/signup', 		'FrontController@displaySignup' );

/**
 * Authentication Routes
 */

Route::get(  '/auth/logout', 	array( 'as' => 'logout', 	'uses' => 'AuthController@processLogout' ) );
Route::post( '/auth/login', 	array( 'as' => 'login', 	'uses' => 'AuthController@processLogin' ) );
Route::post( '/auth/signup', 	array( 'as' => 'signup', 	'uses' => 'AuthController@processSignup' ) );
