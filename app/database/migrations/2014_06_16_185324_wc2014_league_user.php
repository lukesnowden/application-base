<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014LeagueUser extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'league_user' ) )
		{
			Schema::create( 'league_user', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->integer( 'league_id' );
				$table->integer( 'user_id' );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'league_user' ) )
		{
			Schema::drop( 'league_user' );
		}
	}

}
