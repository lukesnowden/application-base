<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Wc2014Leagues extends Migration {

	/**
	 * [up description]
	 * @return [type] [description]
	 */

	public function up()
	{
		if( ! Schema::hasTable( 'leagues' ) )
		{
			Schema::create( 'leagues', function( $table )
			{
				$table->increments( 'id' );
				$table->timestamps();
				$table->string( 'name', 100 );
			});
		}
	}

	/**
	 * [down description]
	 * @return [type] [description]
	 */

	public function down()
	{
		if( Schema::hasTable( 'leagues' ) )
		{
			Schema::drop( 'leagues' );
		}
	}

}
