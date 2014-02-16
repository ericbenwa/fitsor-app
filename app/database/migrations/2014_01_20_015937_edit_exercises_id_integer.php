<?php

use Illuminate\Database\Migrations\Migration;

class EditExercisesIdInteger extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::update('ALTER TABLE `exercises` MODIFY `id` INTEGER(11)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::update('ALTER TABLE `exercises` MODIFY `id` INTEGER(10)');
	}

}