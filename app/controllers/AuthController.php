<?php

class AuthController extends BaseController {

	/**
	 * [$routeAfterLogin description]
	 * @var string
	 */

	private $routeAfterLogin = '/';

	/**
	 * [$routeAfterSignup description]
	 * @var string
	 */

	private $routeAfterSignup = '/';

	/**
	 * [$routeAfterLogout description]
	 * @var string
	 */

	private $routeAfterLogout = '/';

	/**
	 * [processLogout description]
	 * @return [type] [description]
	 */

	public function processLogout()
	{
		Auth::logout();
		return Redirect::to( $this->routeAfterLogout );
	}

	/**
	 * [processLogin description]
	 * @return [type] [description]
	 */

	public function processLogin()
	{
		if ( Auth::attempt( array( 'email' => Input::get( 'email' ), 'password' => Input::get( 'password' ) ) ) ) {
		    return Redirect::intended( $this->routeAfterLogin );
		}
		Session::flash( 'error_message', 'Could not verify credentials.' );
		return $this->backToPreviousRequest();
	}

	/**
	 * [processSignup description]
	 * @return [type] [description]
	 */

	public function processSignup()
	{
		$validator = Validator::make( Input::all(), array(
			'email' 		=> 'required|email|unique:users',
			'first_name'	=> 'required|max:40|min:3',
			'last_name'		=> 'required|max:40|min:3',
			'password'		=> 'required|min:6|confirmed',
			'screen_name'	=> 'required|min:5|max:15|unique:users'
		));
		if( $validator->fails() ) {
			return $this->backToPreviousRequest( $validator->errors() );
		}
		$user = new User;
		$user->first_name 	= Input::get( 'first_name' );
		$user->last_name 	= Input::get( 'last_name' );
		$user->password 	= Hash::make( Input::get( 'password' ) );
		$user->screen_name 	= Input::get( 'screen_name' );
		$user->email 		= Input::get( 'email' );
		$user->save();
		Auth::loginUsingId( $user->id );
		return Redirect::to( $this->routeAfterSignup );
	}

}