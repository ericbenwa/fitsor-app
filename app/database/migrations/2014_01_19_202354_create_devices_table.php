<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('devices', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('device_udid');
			$table->integer('exercise_type_id');
			$table->string('device_city');
			$table->string('device_state');
			$table->string('device_name');
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
		Schema::drop('devices');
	}

}
