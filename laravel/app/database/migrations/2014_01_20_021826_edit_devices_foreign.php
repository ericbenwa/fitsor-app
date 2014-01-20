<?php

use Illuminate\Database\Migrations\Migration;

class EditDevicesForeign extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('devices', function($table) {
			$table->foreign('exercise_type_id')->references('id')->on('exercise_types');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('devices', function($table) {
			$table->dropForeign('exercise_type_id')->references('id')->on('exercise_types');
		});
	}

}