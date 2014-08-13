<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014LeagueScore extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'league_score' ) )
		{
			Schema::create( 'league_score', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->integer( 'league_id' );
				$table->integer( 'score_id' );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'league_score' ) )
		{
			Schema::drop( 'league_score' );
		}
	}

}
