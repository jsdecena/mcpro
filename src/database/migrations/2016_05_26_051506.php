<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCityAreaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('city_area', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_city')->unsigned()->index('city_area_id_city_foreign');
			$table->string('area');
			$table->integer('zip_code');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('city_area');
	}

}
