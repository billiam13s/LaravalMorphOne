<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Init extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('vehicleable_id');
			$table->string('vehicleable_type');
			$table->timestamps();
		});

		Schema::create('car', function($table)
		{
			$table->increments('id');
			$table->boolean('trunk');
			$table->timestamps();
		});

		Schema::create('truck', function($table)
		{
			$table->increments('id');
			$table->string('bed_type');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('truck');
		Schema::drop('car');
		Schema::drop('vehicle');
	}

}
