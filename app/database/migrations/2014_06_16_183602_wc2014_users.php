<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014Users extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'users' ) )
		{
			Schema::create( 'users', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->string( 'remember_token', 100 );
				$table->string( 'password', 100 );
				$table->string( 'email' );
				$table->string( 'first_name', 40 );
				$table->string( 'last_name', 40 );
				$table->string( 'screen_name', 15 );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'users' ) )
		{
			Schema::drop( 'users' );
		}
	}

}
