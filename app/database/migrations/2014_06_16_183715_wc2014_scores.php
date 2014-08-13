<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014Scores extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'scores' ) )
		{
			Schema::create( 'scores', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->integer( 'score' );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'scores' ) )
		{
			Schema::drop( 'scores' );
		}
	}

}
