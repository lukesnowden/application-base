<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014Teams extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'teams' ) )
		{
			Schema::create( 'teams', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->integer( 'name' );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'teams' ) )
		{
			Schema::drop( 'teams' );
		}
	}

}
