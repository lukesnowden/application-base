<?php

class BaseController extends Controller {

	/**
	 * [$layout description]
	 * @var string
	 */

	protected $layout = 'Front.Globals.base';

	/**
	 * [$header description]
	 * @var string
	 */

	protected $header = 'Front.Globals.header';

	/**
	 * [$footer description]
	 * @var string
	 */

	protected $footer = 'Front.Globals.footer';

	/**
	 * [$HTMLheader description]
	 * @var string
	 */

	protected $HTMLheader = 'Front.Globals.HTMLheader';

	/**
	 * [$HTMLfooter description]
	 * @var string
	 */

	protected $HTMLfooter = 'Front.Globals.HTMLfooter';

	/**
	 * [$data description]
	 * @var array
	 */

	protected $data = array();

	/**
	 * [$errors description]
	 * @var boolean
	 */

	protected $errors = false;

	/**
	 * [setupLayout description]
	 * @return [type] [description]
	 */

	protected function setupLayout()
	{
		if ( ! is_null( $this->layout ) )
		{
			$this->layout = View::make( $this->layout, $this->data );
		}
		$this->layout->nest( 'HTMLheader', $this->HTMLheader, array( 'header' => View::make( $this->header ) ) );
		$this->layout->nest( 'HTMLfooter', $this->HTMLfooter, array( 'footer' => View::make( $this->footer ) ) );
		if( is_null( $this->layout->content ) )
		{
			$this->layout->content = '';
		}
	}

	/**
	 * [backToPreviousRequest description]
	 * @param  array  $errors [description]
	 * @return [type]         [description]
	 */

	public function backToPreviousRequest( $errors = array() ) {
		return Redirect::back()->withInput()->withErrors( $errors );
	}

	/**
	 * [redirectTo description]
	 * @param  [type] $to [description]
	 * @return [type]     [description]
	 */

	public function redirectTo( $to )
	{
		return Redirect::to( $to );
	}

}
