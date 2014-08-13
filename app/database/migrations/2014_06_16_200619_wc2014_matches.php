<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014Matches extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'matches' ) )
		{
			Schema::create( 'matches', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->integer( 'home_id' );
				$table->integer( 'away_id' );
				$table->integer( 'winner_id' );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'matches' ) )
		{
			Schema::drop( 'matches' );
		}
	}

}
