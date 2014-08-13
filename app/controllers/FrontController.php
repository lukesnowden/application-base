<?php

class FrontController extends BaseController {

	/**
	 * [displayHomePage description]
	 * @return [type] [description]
	 */

	public function displayHomePage()
	{
		$this->layout->content = View::make( 'Front.home-page' );
	}

	/**
	 * [displaySignup description]
	 * @return [type] [description]
	 */

	public function displaySignup()
	{
		$this->layout->content = View::make( 'Front.signup-page' );
	}

}