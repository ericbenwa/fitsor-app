<?php

use Illuminate\Database\Migrations\Migration;

class EditDevicesIdInteger extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::update('ALTER TABLE `devices` MODIFY `id` INTEGER(11)');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::update('ALTER TABLE `devices` MODIFY `id` INTEGER(10)');
	}

}