<?php

use Illuminate\Database\Migrations\Migration;

class AddForeignKeysExercises extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exercises', function($table) {
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('device_udid')->references('id')->on('devices');
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
		Schema::table('exercises', function($table) {
			$table->dropForeign('user_id')->references('id')->on('users');
			$table->dropForeign('device_udid')->references('id')->on('devices');
			$table->dropForeign('exercise_type_id')->references('id')->on('exercise_types');
		});
	}

}